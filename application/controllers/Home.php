<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
    }
    
    public function memilih()
    {
        $this->load->model('M_calon');
        $data['calon'] = $this->M_calon->all()->result();
        // print_r($data);
        // die();
        $this->load->view('memilih', $data);
        $this->load->view('footer');
    }

    public function pilih_calon()
    {
        $this->load->model('M_calon');
        $id = $this->input->post('id_calon');
        $data = array('id_calon' => $id);
        $ins = $this->M_calon->ins($data);
        
        if ($ins == 1) {
            echo 1;
        }else {
            echo 2;
        }
    }
}
