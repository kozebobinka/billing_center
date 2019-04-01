<?
class Data_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
	}

    public function chesk_user($in)
    {
        
        return $query->row_array();
    }
}