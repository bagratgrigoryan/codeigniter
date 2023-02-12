<?php
require("LoginController.php");

class ContentController extends LoginController
{
	public function AddPartner()
	{
		$this->dashboard();
		$this->load->view("Auth/addPartnerContent/addPartner");
		$this->session->unset_userdata('msg');
	}

	public function editPartner()
	{
		$this->dashboard();
		$this->load->model('admin/PartnerModel', 'pm');
		$data['partners'] = $this->pm->getPartner();
		$this->load->view("Auth/addPartnerContent/editPartner", $data);
		$this->load->view('Auth/footer');
	}

	public function deletePartner($id)
	{
		$this->dashboard();
		$this->load->model('admin/PartnerModel', 'pm');
		$this->pm->destroy($id);
		redirect(base_url('/v1/dashboard/edit'));
	}
	public function editPartnersPage($id)
	{
		$this->dashboard();
		$this->load->model('admin/PartnerModel', 'pm');
		$data['partner'] = $this->pm->getPartnerById($id);
		$this->load->view("Auth/addPartnerContent/editPartnersPage", $data);
		$this->load->view('Auth/footer');
	}

	public function savePartnerChanges($id)
	{
		$this->form_validation->set_rules('partnerId', 'Partner Id', 'required');
		$this->form_validation->set_rules('partnerName', 'Partner Name', 'required');
		$this->form_validation->set_rules('domain', 'Domain', 'required');
		$this->form_validation->set_rules('key', 'Key');
		$this->form_validation->set_rules('wallet', 'Wallet');
		var_dump($this->input->post()) . "<br>";

		if ($this->form_validation->run()) {
			$data = array(
				'partner_name' => $this->input->post('partnerName'),
				'domain' => $this->input->post('domain'),
				'keyID' => $this->input->post('key'),
				'wallet' => $this->input->post('wallet'),
			);
			$this->load->model('admin/PartnerModel', 'pm');
			$this->pm->savePartner($data, $id);
			redirect(base_url('v1/dashboard/edit'));

		}
	}

	public function CreatePartner()
	{
		$this->form_validation->set_rules('partnerName', 'Partner Name', 'required|is_unique[partners.partner_name]');
		$this->form_validation->set_rules('partnerId', 'Partner Id', 'required|is_unique[partners.id]');
		$this->form_validation->set_rules('domain', 'Domain', 'required|is_unique[partners.domain]');
		$this->form_validation->set_rules('key', 'Key');
		$this->form_validation->set_rules('wallet', 'Wallet');

		if ($this->form_validation->run()) {

			$data = array(
				'id' => $this->input->post('partnerId'),
				'partner_name' => $this->input->post('partnerName'),
				'domain' => $this->input->post('domain'),
				'keyID' => $this->input->post('key'),
				'wallet' => $this->input->post('wallet'),
			);

			$this->load->model('admin/PartnerModel', 'pm');
			if ($this->pm->CreatePartner($data)) {
				$this->session->set_userdata('msg',
					"<div class='alert alert-success'>Partner Created Successfully</div>");
			}
			$this->AddPartner();
			redirect(base_url('v1/dashboard/addPartner'));
		}
	}
}
