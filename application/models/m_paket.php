<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_paket extends CI_Model {



  public function getAllPaket1(){

	    $this->db->from('tb_paket');

	    $query = $this->db->get();
	    return $query->result();
	}
	public function getAllPaket(){

	    $this->db->from('tb_paket');
      $this->db->where('tanggal_ambil','Belum Di Ambil');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getPenghuni($id){
		$this->db->from('tb_Bank');
		$this->db->where('Id_Bank',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function inputPaket($tanggal_datang,$sasaran,$penerima,$isi_paket,$tanggal_diambil){

 	$data = array(
        'tanggal_datang' =>  $tanggal_datang,
        'sasaran' => $sasaran,
        'penerima'=>  $penerima,
        'isi_paket' => $isi_paket,
        'tanggal_ambil' => $tanggal_diambil
	);

		$this->db->insert('tb_paket', $data);
	}

	public function editPaket($id_paket,$tanggal_diambil)
    {

     $data = array(
       'id_paket' => $id_paket,
       'tanggal_ambil' => $tanggal_diambil


	);
        	$this->db->where('id_paket', $id_paket);
			$this->db->update('tb_paket', $data);
			//print_r($data);
	}
}
	?>
