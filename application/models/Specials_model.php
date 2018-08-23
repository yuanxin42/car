<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Specials_model extends CI_Model{
		public function get_allcar(){
			$query=$this->db->query("select * from all_car")->result();
			return $query;
		}
	}
?>