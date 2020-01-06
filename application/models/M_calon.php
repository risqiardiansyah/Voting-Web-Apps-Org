<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon extends CI_Model {

    public function all()
    {
        return $this->db->get('calon');
    }

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get('calon');
    }
    
    public function ins($data)
    {
        return $this->db->insert('pemilihan',$data);
    }
}