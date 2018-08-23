<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class New_model extends CI_Model{
		public function get_allcar(){
			$query=$this->db->query("select * from all_car")->result();
			return $query;
		}
		public function nine_car(){
			$robcar = $this->db->query("select * from nine_percent")->result();
			for($x = 0;$x<count($robcar);$x++) {
				$message = $this->db->query("select * from all_car where id=".$robcar[$x]->car_id)->row();
				$robcar[$x]->img = $message->img;
				$robcar[$x]->price = $message->price;
				$robcar[$x]->oldprice = $message->oldprice;
			}
			return $robcar;
		}
        public function eight_car(){
			$robcar = $this->db->query("select * from eight_percent")->result();
			for($x = 0;$x<count($robcar);$x++) {
				$message = $this->db->query("select * from all_car where id=".$robcar[$x]->car_id)->row();
				$robcar[$x]->img = $message->img;
				$robcar[$x]->price = $message->price;
				$robcar[$x]->oldprice = $message->oldprice;
			}
			return $robcar;
		}
	}
?>