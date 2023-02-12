<?php

class LoginController extends CI_Controller
{
	public function registerPage()
	{
		$this->load->view("Auth/header");
		$this->load->view("Auth/register");
		$this->session->unset_userdata('msg');
		$this->load->view("Auth/footer");
	}

	public function loginPage()
	{
		$this->load->view("Auth/header");
		$this->load->view("Auth/login");
		$this->session->unset_userdata('err');
		$this->load->view("Auth/footer");
	}
	public function logout()
	{
		$this->session->unset_userdata('loggedIn');
		redirect(base_url('v1'));
	}

	public function dashboard()
	{
		$this->load->view("Auth/users/headerAdmin");
		$this->load->view("Auth/users/user");
		$this->load->view("Auth/users/footerAdmin");
	}

	public function createAdmin()
	{
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|is_unique[users.phone]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {

			$data = array(
				'first_name' => $this->input->post('firstName'),
				'last_name' => $this->input->post('lastName'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'password' => md5($this->input->post('password')),
			);
			$this->load->model('admin/AdminModel', 'am');
			if ($this->am->create($data)) {
				$this->session->set_userdata('msg',
					"<div class='alert alert-success'>User Successfully Created</div>");
				$this->registerPage();
			}

		} else {
			$this->registerPage();
		}
	}

	public function loginUser()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			$this->load->model("admin/AdminModel", 'am');
			$status = $this->am->read($data);
			if ($status == "INVALID_PASS") {
				$this->session->set_userdata('err',
					"<div class='alert alert-danger'>Invalid Password</div>");
				$this->loginPage();
			} elseif ($status == "INVALID_USER") {
				$this->session->set_userdata('err',
					"<div class='alert alert-danger'>Invalid User and Password</div>");
				$this->loginPage();
			}else {
				$this->session->set_userdata('loggedIn',$this->am->get_data());
				$this->dashboard();
			}
		} else {
			$this->loginPage();
		}
	}

}
