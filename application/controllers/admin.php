<?php
defined('BASEPATH') or exit('No direct script access allowed'); 
 
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cek_login();
	} 
 
    public function index()
    {
    	$data['judul'] = 'Dashboard';
    	$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    	$data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
		$data['buku'] = $this->ModelBuku->getBuku()->result_array(); 
		
		echo time(). "" . PHP_EOL;
		echo date('Y', time()). "" . PHP_EOL;
		echo date('D', time()). "" . PHP_EOL;
		echo date('M', time()). "" . PHP_EOL;
		echo date('H', time()). "" . PHP_EOL;
		echo date('i', time()). "" . PHP_EOL;
		echo date('s', time()). "" . PHP_EOL;

		// echo var_dump($data['anggota']);
		//exit();
 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}