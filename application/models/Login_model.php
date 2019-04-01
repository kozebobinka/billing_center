<?
class Login_model extends CI_Model
{
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
	}
	
	public function get_factory_data($fid)
	{
		$this->db->select('factory_id');
		$this->db->select('factory_name');
		$this->db->select('factory_db');
		$this->db->select('region AS factory_region');
		$this->db->select("CONCAT(type, ' ', city) AS factory_city");
		$this->db->from('factories');
		$this->db->join('regions', 'factories.region_id = regions.id');
		$this->db->join('cities', 'factories.city_id = cities.id');
		$this->db->where('factory_id', $fid);
		$query = $this->db->get();
		
		$return = $query->row_array();
		$this->factory_db = $return['factory_db'];
		
		return $return;
	}
	
	public function chesk_user($in)
	{
		$factory = $this->get_factory_data($in['factory']);
		
		$this->factory_db_config['database'] = 'infogkhc_rc__' . $this->input->post('factory');
		$factory_db = $this->load->database($this->factory_db_config, TRUE);
		
		$factory_db->select('*');
		$factory_db->from('users');
		$factory_db->where('factory_id', $factory['factory_db']);
		$factory_db->where('login', $in['login']);
		$factory_db->where('password', md5($in['password']));
		$query = $factory_db->get();
		
		///// BUG!!!!
		return array_merge($query->row_array(), $factory);
	}
}
