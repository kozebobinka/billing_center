<?
class Tables_model extends CI_Model
{
	public $f_db;	
	private $factory_db_config = array(
		'hostname' => 'localhost',
		'username' => 'infogkhc_rc',
		'password' => 'St^GRnyBSWpu',
		'dbdriver' => 'mysqli',
		'db_debug' => TRUE,
	);
	
	public function __construct()
	{
		parent::__construct();
		if (!isset($this->session->role)) {
			redirect('login');
		}
		$this->factory_db_config['database'] = 'infogkhc_rc__' . $this->session->userdata('factory_db');
		$this->f_db = $this->load->database($this->factory_db_config, TRUE);
	}

	public function get_cities()
	{
		// все города, используемые предприятием
		$this->f_db->select('city_id');
		$this->f_db->from('adr_cities');
		$this->f_db->where('factory_id', $this->session->userdata('factory_id'));
		$query = $this->f_db->get();
		
		$return['num_records'] = $query->num_rows();
		$return['cities'] = array();
		
		if($return['num_records'] > 0) {
            foreach($query->result() as $row) {
                $cities_ids[] = $row->city_id;
            }
		
			// данные городов, используемых предприятиями из общей базы
			$this->db->select('cities.id AS city_id');
			$this->db->select('city');
			$this->db->select("CONCAT(type, ' ', city) AS city_full");
			$this->db->select('regions.id AS region_id');
			$this->db->select('region');
			$this->db->from('cities');
			$this->db->join('regions', 'cities.region_id = regions.id');
			$this->db->where_in('cities.id', $cities_ids);
			$query = $this->db->get();
			$return['cities'] = $query->result();
		}
		
		return $return;
	}
	
	public function get_content_for_select_facrory_districts() 
	{
		$this->db->select('regions.id AS value');
		$this->db->select('region AS option');
		$this->db->from('regions');
		$this->db->join('factories', 'factories.region_id = regions.id');
		$this->db->where('factories.factory_id', $this->session->userdata('factory_id'));
		$query = $this->db->get();
		
		return generete_assoc($query->result());		
	}
	
	public function add_city($in)
	{
		$this->db->insert('cities', array(
			'region_id'	=> $in['region'],
			'city'		=> $in['city'],
			'type'		=> $in['type'],
		));
		$city_id = $this->db->insert_id();
		
		$this->db->insert('log', array(
			'table_name'	=> 'cities',
			'item_id'		=> $city_id,
			'factory_id'	=> $this->session->userdata('factory_id'),
			'user'			=> $this->session->userdata('id'),
			'comment'		=> $in['comment'],
		));
		
		$this->f_db->insert('adr_cities', array(
			'city_id' => $city_id,
			'factory_id' => $this->session->userdata('factory_id'),
		));
	}
}