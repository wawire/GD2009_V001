<?php


class clientsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('includes/header');
		$this->load->view('clients/index');
		$this->load->view('includes/footer');
	}

	function compositeEquipment()
	{
		$this->load->view('includes/header');
		$this->load->view('equipment/compositeEquipment');
		$this->load->view('includes/footer');
	}

	function addEquipment()
	{
		$this->load->view('includes/header');
		$this->load->view('equipment/addEquipment');
		$this->load->view('includes/footer');
	}

}
