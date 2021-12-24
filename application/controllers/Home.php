<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/index.php');
		$this->load->view('home/layouts/footer.php');
	}

	public function detail()
	{
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/detail.php');
		$this->load->view('home/layouts/footer.php');
	}
}
