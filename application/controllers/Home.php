<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		{
			$this->load->model('bukuModel','buku');	
		}
	}

	public function index()
	{
		$data['buku'] = $this->buku->get_all();
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/index.php', $data);
		$this->load->view('home/layouts/footer.php');
	}

	public function detail($id)
	{
		$data['buku'] = $this->buku->get_id($id);
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/detail.php', $data);
		$this->load->view('home/layouts/footer.php');
	}

	public function keranjang()
	{
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/isikeranjang.php');
		$this->load->view('home/layouts/footer.php');
	}

	public function checkout()
	{
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/checkout.php');
		$this->load->view('home/layouts/footer.php');
	}

}
