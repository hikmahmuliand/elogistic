<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpbd extends CI_Controller {

	public function index()
	{	
		$this->data['hasilnya'] = $this->ProsedurModel->getProsedur('prosedur');
		$this->load->view('Bpbd', $this->data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}

	//untuk fungsi di menu tata cara =================================================================================
	public function insertProsedur(){
		$prosedur = $_POST['prosedur'];
		$data = array('prosedur' => $prosedur);
		$tambah = $this->ProsedurModel->addProsedur('prosedur',$data);
		if ($tambah > 0) {
			redirect('Bpbd/index#prosedur');
		} 
	}

	public function deleteProsedur($id){
		$hapus = $this->ProsedurModel->hapusProsedur('prosedur',$id);
		if ($hapus > 0) {
			redirect('Bpbd/index#prosedur');
		}
	}

}
