<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
	}
	public function index()
	{
		$data['barang_data'] = $this->barang_model->get_barang();
		$this->load->view('barang_list',$data);
	}
	
	public function about()
	{
		$this->load->view('about');
	}
	
}