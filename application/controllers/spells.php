<?php
class Spells extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('spells_model');
		$this->load->library('Nav');
	}

	public function index()
	{
		$data['title'] = "View Spells";
		$menu = new Nav;
		$data['nav'] = $menu->get_Nav();
		$this->load->view('templates/header', $data);
		$data['spells'] = $this->spells_model->get_spells();
		$this->load->view('spells/index', $data);
		$this->load->view('templates/footer');
	}
}
