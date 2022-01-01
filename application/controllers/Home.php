<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bukuModel','buku');	
	}

	public function index()
	{
		
		$data['title'] = 'Home';
		$data['buku'] = $this->buku->get_all();
		$this->load->view('home/layouts/navbar.php', $data);
		$this->load->view('home/index.php', $data);
		$this->load->view('home/layouts/footer.php');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Buku';
		$data['buku'] = $this->buku->get_all();
		$data['buku'] = $this->buku->get_id($id);
		$this->load->view('home/layouts/navbar.php', $data);
		$this->load->view('home/detail.php', $data);
		$this->load->view('home/layouts/footer.php');
	}

	public function keranjang()
	{
		$data['title'] = 'Keranjang';
		
		$this->load->view('home/layouts/navbar.php', $data);
		$this->load->view('home/isikeranjang.php');
		$this->load->view('home/layouts/footer.php');
	}

	public function checkout($id)
	{
		$data['title'] = 'Checkout';
		$data['buku'] = $this->buku->get_id($id);
		$this->load->view('home/layouts/navbar.php', $data);
		$this->load->view('home/checkout.php');
		$this->load->view('home/layouts/footer.php');
	}

	public function search()
	{
		$data['title'] = 'Search';
		$data['buku'] = $this->buku->get_all();
		$keyword = $this->input->post('keyword');
		$data = $this->buku->get_keyword($keyword, $data);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('home/layouts/navbar.php', $data);
		$this->load->view('home/search.php', $data);
		$this->load->view('home/layouts/footer.php');
	}
	
	public function faq()
	{
		$this->load->view('home/layouts/navbar.php');
		$this->load->view('home/faq.php');
		$this->load->view('home/layouts/footer.php');
	}

}
