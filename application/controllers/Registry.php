<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registry extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!isset($this->session->role)) {
			redirect('login');
		}
		// $this->load->model('registry_model');
	}

	public function index()
	{
		$data = $this->session->userdata();

		$this->load->load_template('main/main', $data);
		$this->load->view('main/modal_windows', $data);
	}

}
