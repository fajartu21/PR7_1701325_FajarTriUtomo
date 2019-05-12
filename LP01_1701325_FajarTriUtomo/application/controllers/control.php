<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __contruct(){
		parent::__contruct();
		$this->load->model('model');
		$this->load->helper('url');
	}

	public function index()
	{	
    	$data['lokomotif'] = $this->model->left(); //membuat data dari hasil transaksi masuk ke $data
		$this->load->view('index1',$data);
	}

	public function right()
	{
		$data['kursi'] = $this->model->right();
		$this->load->view('right',$data);
	}

	public function inner()
	{
		$data['lokomotif'] = $this->model->inner();
		$this->load->view('inner',$data);
	}

	



}
