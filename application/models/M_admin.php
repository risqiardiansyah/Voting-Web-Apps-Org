<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function data_chart()
	{
		$d_calon 	= $this->db->get('calon')->result();
		$d_pemilih = array();
		$sudah_memilih = 0;
		for ($i=0; $i < count($d_calon); $i++) {
			$pemilih = $this->db->select('*')
                    ->from('calon')
                    ->join('pemilihan', 'calon.id_calon = pemilihan.id_calon')
					->where([
						'pemilihan.id_calon'=> $d_calon[$i]->id_calon,
					])
					->get()->result();
			$jml_pemilih = count($pemilih);
			$sudah_memilih = $sudah_memilih + $jml_pemilih;

			$d_pemilih[$i] = $jml_pemilih;
			$sat[$i]['label'] = $d_calon[$i]->nama;
			$sat[$i]['y'] = $jml_pemilih;
			}
		return $sat;
    }
    
    public function all()
    {
        return $this->db->get('pemilihan');
    }
}