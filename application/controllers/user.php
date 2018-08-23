<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('user_model');
		}
		public function reg(){
			$this->load->view('reg.php');
		}
		public function do_reg(){
			$name=$this->input->post('name');
			$pass=$this->input->post('pass');
			$rs=$this->user_model->get_name($name);
			if($rs){
				redirect('user/reg');
			}else{
				$query=$this->user_model->get_insert($name,$pass);
				if($query){
					redirect('user/login');
				}
			}
		}
		public function login(){
			$this->load->view('login.php');
		}
		public function do_login(){
			$name=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$rs=$this->user_model->get_sel($name,$pass);
			if($rs){
				$arr=array(
					'id'=>$rs->uid,
					'name'=>$rs->uname
				);
				$this->session->set_userdata($arr);
				redirect('user/index');
			}
		}
		public function index(){
			$catalog=$this->user_model->get_catalog();
			$arr['catalog']=$catalog;
			if($this->input->post('catalog')){
				$cata=$this->input->post('catalog');
				$rs=$this->user_model->get_cata($cata);
				$arr['blog']=$rs;
				$this->load->view('index.php',$arr);
			}else if($this->input->post('search')){
			$search=$this->input->post('search');
			$rs=$this->user_model->get_search($search);
			$arr['blog']=$rs;
			$this->load->view('index.php',$arr);
			}else{
			$rs=$this->user_model->get_all();
			$arr['blog']=$rs;
			$this->load->view('index.php',$arr);
			}
		}
		public function checkname(){
			header("Access-Control-Allow-Origin:*");
			$name=$this->input->post('uname');
			$rs=$this->user_model->get_check($name);
			if($rs){
				echo "success";
			}
		}
		public function delete(){
			$wid=$this->input->get('wid');
			$rs=$this->user_model->get_delete($wid);
			if($rs){
				redirect('user/index');	
			}
		}
		public function date(){
			$wid=$this->input->get('wid');
			$rs=$this->user_model->get_date($wid);
			$this->load->view('update.php',array('rss'=>$rs));
		}
		public function update(){
			$wid=$this->input->post('wid');
			$title=$this->input->post('title');
			$content=$this->input->post('content');
			$rs=$this->user_model->get_update($wid,$title,$content);
			if($rs){
				redirect('user/index');	
			}
		}
		public function detail(){
			$wid=$this->input->get('wid');
			$rs=$this->user_model->get_date($wid);
			$this->load->view('detail.php',array('rss'=>$rs));
		}
	}
?>