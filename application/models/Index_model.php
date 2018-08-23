<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Index_model extends CI_Model{
		public function get_hotgoods(){
			$hotcar = $this->db->query("select * from hot_goods")->result();
			for($x = 0;$x<count($hotcar);$x++) {
				$message = $this->db->query("select * from all_car where id=".$hotcar[$x]->car_id)->row();
				$hotcar[$x]->img = $message->img;
				$hotcar[$x]->price = $message->price;
				$hotcar[$x]->oldprice = $message->oldprice;
			}
			return $hotcar;
		}
		public function get_allcar(){
			$query=$this->db->query("select * from all_car")->result();
			return $query;
		}
		public function rob_car(){
			$robcar = $this->db->query("select * from rob_car")->result();
			for($x = 0;$x<count($robcar);$x++) {
				$message = $this->db->query("select * from all_car where id=".$robcar[$x]->car_id)->row();
				$robcar[$x]->img = $message->img;
				$robcar[$x]->price = $message->price;
				$robcar[$x]->oldprice = $message->oldprice;
			}
			return $robcar;
		}
		public function get_allcar_toid($wid){
			$query=$this->db->query("select * from all_car where id='$wid'");
			return $query->row();
		}
		public function regis($name,$pass){
			$query=$this->db->query("insert into user(user,pass) value('$name','$pass')");
			return $query;
		}
		public function login_sel($name,$pass){
			$query=$this->db->query("select * from user where user='$name'and pass= '$pass'");
			return $query->row();
		}
		public function insert_allcar($arr){
			$img = $arr['img'];
			$car_type = $arr['type'];
			$price = $arr['price'];
			$oldprice = $arr['oldprice'];
			$title=$arr['youtit'];
			$information=$arr['description'];
			$phone=$arr['youphone'];
			$user_name=$arr['yourname'];
			$adress = $arr['adress'];
			$robtit = $arr['robtit']?$arr['robtit']:'';
			$robdes = $arr['robdes']?$arr['robdes']:'';
			$hottit = $arr['hottit']?$arr['hottit']:'';
			$hotdes = $arr['hotdes']?$arr['hotdes']:'';
			$tojson = json_encode($arr);
			$query=$this->db->query("insert into will_toshow(img,car_type,price,oldprice,title,information,phone,user_name,adress,robtit,robdes,hottit,hotdes,arr) value('$img','$car_type','$price','$oldprice','$title','$information','$phone','$user_name','$adress','$robtit','$robdes','$hottit','$hotdes','$tojson')");
			return $query;
		}
		public function showadmin(){
			$arr=$this->db->query("select * from will_toshow")->result();
			return $arr;
		}
		public function showcallus(){
			$arr=$this->db->query("select * from call_us")->result();
			return $arr;
		}
		public function adminyes($id){
			$res=$this->db->query("select * from will_toshow where id='$id'")->row();
			//  = $res->id;
			$title=$res->title;
			$information=$res->information;
			$arr = json_decode($res->arr);
			$img = $res->img;
			$car_type = $res->car_type;
			$price = $res->price;
			$oldprice = $res->oldprice;
			$phone=$res->phone;
			$user_name=$res->user_name;
			$adress =$res->adress;
			$this->db->query("insert into all_car(img,car_type,price,oldprice,title,information,phone,user_name,adress) value('$img','$car_type','$price','$oldprice','$title','$information','$phone','$user_name','$adress')");
			$thisid = $this->db->insert_id();
			if($arr->nineoreight){
				if($arr->nineoreight=='1'){
					$this->db->query("insert into nine_percent(title,information,car_id) value('$title','$information','$thisid')");
				}
				if($arr->nineoreight=='2'){
					$this->db->query("insert into eight_percent(title,information,car_id) value('$title','$information','$thisid')");
				}
			}
			if($arr->isrob_car=='1'){
				$robtit=$res->robtit;
				$robdes=$res->robdes;
				$this->db->query("insert into rob_car(title,information,car_id) value('$robtit','$robdes','$thisid')");
			}
			if($arr->ishot_car=='1'){
				$hottit=$res->hottit;
				$hotdes=$res->hotdes;
				$this->db->query("insert into hot_goods(title,information,car_id) value('$hottit','$hotdes','$thisid')");
			}
			$query=$this->db->query("delete from will_toshow where id='$id'");
			return $query;
		}
		public function adminno($id){
			$query=$this->db->query("delete from will_toshow where id='$id'");
			return $query;
		}
		public function toseach($name){
			$query=$this->db->query("select * from all_car where title like '%".$name."%'");
			return $query->result();
		}
	}
?>