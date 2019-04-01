<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!isset($this->session->role)) {
			redirect('login');
		}
		$this->load->model('tables_model');
	}

	public function cities()
	{
		$this->form_validation->set_rules('city_id', 'city_id', 'trim|required');
		$this->form_validation->set_rules('city', 'city', 'trim|required');
		$this->form_validation->set_rules('region', 'region', 'trim|required');
		$this->form_validation->set_rules('comment', 'comment', 'trim|required');
		
		if ($this->form_validation->run()) {
			if ($this->input->post('city_id') == 'new') {
				$this->tables_model->add_city($this->input->post());
			} else {
				$this->tables_model->edit_city($this->input->post());
			}
		}		
		
		$data = $this->session->userdata();
		
		$data['table_fields'] = array(
			'city_full'		=> array(
				'name'	=> 'Населений пункт',
				'class'	=> 'text-bold',
			),
			'region'	=> array(
				'name'	=> 'Область',
				'class'	=> '',
			)
		);
		$data['form_fields'] = array (
			'type'		=> array (
				'placeholder'	=> 'Тип населеного пункту',
				'name'			=> 'type',
				'options'		=> generate_types_of_cities(),
				'required'		=> '',
				'class'			=> 'form-control',
			),
			'city' => array (
				'placeholder'	=> 'Назва населеного пункту',
				'name'			=> 'city',
				'required'		=> '',
				'class'			=> 'form-control',	
			),
			'region' => array (
				'placeholder'	=> 'Область',
				'name'			=> 'region',
				'options'		=> $this->tables_model->get_content_for_select_facrory_districts(),
				'required'		=> '',
				'class'			=> 'form-control',
			)
		);

		$data['hidden_fields'] = array(
			'city_id' => 'new',
		);
		
		$data['records'] = $this->tables_model->get_cities();
		$data['num_records'] = $data['records']['num_records'];
		$data['records'] = $data['records']['cities'];
		
		$data['title_modal'] = 'населений пункт';
		$data['title'] = "Редагування населених пунктів";
		
		$this->load->load_table('tables/cities', $data);
		$this->load->view('tables/modal_windows', $data);
	}
}
