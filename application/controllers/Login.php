<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	
	public function index($fid = 0)
	{
		if (isset($this->session->role)) {
			redirect('registry');
		}
		
		$data['factory'] = $this->login_model->get_factory_data($fid);
		$data['factories'] = $this->login_model->db->get('factories')->result_array();
		
		$this->form_validation->set_rules('factory', 'підприємство', 'required');
		$this->form_validation->set_rules('login', 'логін', 'required');
		$this->form_validation->set_rules('password', 'пароль', 'required');
		
		if ($this->form_validation->run()) {
			
			if ($user = $this->login_model->chesk_user($this->input->post())) {
				$this->session->set_userdata($user);
				redirect('registry');
			}
		}
		
		$this->load->view('login/login', $data);
	}
	
	public function logout()
	{
		$fid = $this->session->factory_id;
		$this->session->sess_destroy();
		redirect("login/$fid");
	}
}
