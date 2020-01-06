<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $this->load->model('M_admin');
        $da = $this->M_admin->data_chart();
        $data['sa'] = json_encode($da);
        $data['all'] = $this->M_admin->all()->result();
		$this->load->view('admin', $data);
    }
    

}
