<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_penghuni extends CI_Model {


	public function getAllPenghuni(){

	    $this->db->from('tb_penghuni');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getPenghuni($id){
		$this->db->from('tb_penghuni');
		$this->db->where('id_penghuni',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function inputPenghuni($nama, $unit, $no_ktp){

 	$data = array(
        'nama'=>  $nama,
        'unit' => $unit,
        'no_ktp' => $no_ktp
	);

		$this->db->insert('tb_penghuni', $data);
	}

	public function editPenghuni($id_penghuni, $nama,$unit, $no_ktp)
    {

			$data = array(
		        'nama'=>  $nama,
		        'unit' => $unit,
		        'no_ktp' => $no_ktp
			);
        	$this->db->where('id_penghuni', $id_penghuni);
			$this->db->update('tb_penghuni', $data);
			//print_r($data);
	}
	public function hapusPenghuni($id)
    {

       $this->db->where('id_penghuni',$id);
       $this->db->delete('tb_penghuni');

    }
}
	?>
