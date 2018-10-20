<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		//$this->load->view('famatel/header');
		$this->load->view('famatel/index');
		$this->load->view('famatel/footer');
	}
}
