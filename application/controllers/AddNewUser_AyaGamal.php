<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNewUser_AyaGamal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('my_model');
	}

	function show(){
		$user_q = $this->my_model->get_all_data();

		$view['users'] = $user_q->result();
		$content = $this->load->view('body/index', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

	function create(){
		$view['msg'] = '';

		if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('email', 'email', 'required|is_unique[ayagamal.email]');
			$this->form_validation->set_rules('phone', 'phone', 'required|numeric');

			if($this->form_validation->run()){
				$user['name'] = $this->input->post('name');
				$user['phone'] = $this->input->post('phone');
				$user['email'] = $this->input->post('email');
				$user['password'] = $this->input->post('password');
			
				$this->my_model->insert($user);
				$view['msg'] = 'updated successfully';
			} else {
				$view['msg'] = "can't update due to : " . validation_errors();
			}
		}

		$content = $this->load->view('body/create', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

	function delete(){
		$user_id = $this->uri->segment(3);

		$this->my_model->delete($user_id);

		$user_q = $this->my_model->get_all_data();

		$view['users'] = $user_q->result();
		$content = $this->load->view('body/index', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

	function update(){
		$user_id = $this->uri->segment(3);
		$view['msg'] = '';

		if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('phone', 'phone', 'required|numeric');

			if($this->form_validation->run()){
				$user['name'] = $this->input->post('name');
				$user['phone'] = $this->input->post('phone');
				$user['email'] = $this->input->post('email');
				$user['password'] = $this->input->post('password');
			
				$this->my_model->update($user_id, $user);
				$view['msg'] = 'updated successfully';
			} else {
				$view['msg'] = "can't update due to : " . validation_errors(); 
			}
		}

		$user_q = $this->my_model->get_user_by_id($user_id);
		
		$view['user_q'] = $user_q;
		$content = $this->load->view('body/edit', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}
}

?>




