<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model {

	 function proseslogin($nama, $nip){

	 	  $this->db->from('tb_karyawan');
		  $this->db->where('nama',$nama);
		  $this->db->where('nip',$nip);

		  $query = $this->db->get();
		  // if ($query) {
		  // 	# code...
		  // 	echo "ok dong";
		  // }else {
		  // 	# code...
		  // 	echo "not ok dong";
		  // }
		 return $query->result();
 	}

}
?>
