<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$this->load->view('Petugas');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}

}
