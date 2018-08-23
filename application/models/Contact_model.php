<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Contact_model extends CI_Model{
		public function insert_msg($userName,$userEmail,$userPhone,$userMsg){
			$query=$this->db->query("insert into call_us(emil,msg,name,phone) value('$userEmail','$userMsg','$userName','$userPhone')");
			return $query;
		}
	}
?>