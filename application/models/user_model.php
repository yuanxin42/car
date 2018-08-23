<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function get_name($name){
			$query=$this->db->query("select * from user where uname='$name'");
			return $query->row();
		}
		public function get_insert($name,$pass){
			$query=$this->db->query("insert into user(uid,uname,pass) value(null,'$name','$pass')");
			return $query;
		}
		public function get_sel($name,$pass){
			$arr=array(
				'uname'=>$name,
				'pass'=>$pass
			);
			$query=$this->db->get_where('user',$arr);
			return $query->row();
		}
		public function get_check($name){
			$query=$this->db->get_where('user',array('uname'=>$name));
			return $query->row();
		}
		public function get_all(){
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->join('user','where user.uid=blog.uid');
			$query = $this->db->get();
			return $query->result_array();
		}
		public function get_search($search){
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->join('user','where user.uid=blog.uid and title like "%'.$search.'%"');
			$query = $this->db->get();
			return $query->result_array();
		}
		public function get_catalog(){
			$query=$this->db->get('catalog');
			return $query->result_array();
		}
		public function get_cata($cata){
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->join('user','where user.uid=blog.uid and cid='.$cata);
			$query=$this->db->get();
			return $query->result_array();
		}
		public function get_delete($wid){
			$query=$this->db->query("delete from blog where wid='$wid'");
			return $query;
		}
		public function get_date($wid){
			$query=$this->db->query("select * from blog where wid='$wid'");
			return $query->row();
		}
		public function get_update($wid,$title,$content){
			$query=$this->db->query("update blog set title='$title',content='$content' where wid='$wid'");
			return $query;
		}
	}
?>