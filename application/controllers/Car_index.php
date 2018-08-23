<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_index extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Index_model');
		$this->load->library('session');
		 $this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		if(!$this->session->userdata('data')){
			$data = array();
			$this->session->set_userdata('data',$data);
		}
		if(!$this->session->userdata('shoping')){
			$shoping = array();
			$this->session->set_userdata('shoping',$shoping);
		}
		if(!$this->session->userdata('user')){
			$user = null;
			$this->session->set_userdata('user',$user);
		}
		$rob_car=$this->Index_model->rob_car();
		$hot_goods=$this->Index_model->get_hotgoods();
		$this->load->view('index.php',array('hot_goods'=>$hot_goods,'rob_car'=>$rob_car));
	}
	public function login(){
		$this->load->view('login.php');
	}
	public function register(){
		$this->load->view('register.php');
	}
	public function shoping(){
		if(count($_SESSION['data'])){
			$data = $_SESSION['data'];
		}else{
			$data = array();
		}
		if(count($_SESSION['shoping'])){
			$shoping = $_SESSION['shoping'];
		}else{
			$shoping = array();
		}
		$id=$this->input->get('id');
		$type=$this->input->get('type');
		$number1 = count($data);
		array_push($data,$id);
		$data=array_unique($data);  // 去重
		$number2 = count($data);
		$this->session->set_userdata('data',$data);
		if($number1!=$number2){
			// if($type == 'rob'){	
			// }  类型判断没写
			$car_message=$this->Index_model->get_allcar_toid($id);
			$shoping[] = $car_message;
		}
		$this->session->set_userdata('shoping',$shoping);
		if($type=='all'){
			  redirect('Car_specials/index');
		}else if($type=='ne'){
			  redirect('Car_new/index');
		}else{
			$this->index();
		}
	}
	public function delect_shoping(){
		unset($_SESSION['data']);
		unset($_SESSION['shoping']);
		$this->index();
	}
	public function regis(){
		$user=$this->input->get('user');
		$pass=$this->input->get('pass');
		$res=$this->Index_model->regis($user,$pass);
		if($res){
			echo '成功';
		}else{
			echo '失败';
		}
	}
	public function tologin(){
		$name=$this->input->get('user');
		$pass=$this->input->get('pass');
		$rs=$this->Index_model->login_sel($name,$pass);
		if($rs->isadmin=='1'){
			$rs->user = $rs->user.'->管理员';
		}else{
			$rs->user = $rs->user.'->普通用户';
		}
		if($rs){
			$arr=array(
				'id'=>$rs->id,
				'user'=>$rs->user
			);
			$this->session->set_userdata('user',$arr);
			echo '登陆成功';
		}else{
			echo '失败';
		}
	}
	public function nouser(){
		$_SESSION['user'] = null;
		$this->index();
	}
	public function maiche(){
		$this->load->view('maiche.php');
	}
	public function maiche_message(){
		// 0是枪手 1是热门 2是九成新 3是八成新
		$config['upload_path']='./assets/images/';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']=1020;
        $config['max_width']=10224;
        $config['max_height']=7268;
		$arr = array();
        $this->load->library('upload',$config);
		$arr['yourname']=$this->input->post('yourname');
		$arr['youphone']=$this->input->post('youphone');
		$arr['adress']=$this->input->post('adress');
		$arr['price']=$this->input->post('price');
		$arr['oldprice']=$this->input->post('oldprice');
		$arr['youtit']=$this->input->post('youtit');
		$arr['description']=$this->input->post('description');
		$arr['type']='';
		$arr['isrob_car']=$this->input->post('isrob_car');
		if($arr['isrob_car']=='1'){
			if($arr['type']==''){
				$arr['type']='0';
			}else{
				$arr['type']=$arr['type'].',0';
			}
			$arr['robtit']=$this->input->post('robtit');
			$arr['robdes']=$this->input->post('robdes');
		}else{
			$arr['robtit']='';
			$arr['robdes']='';
		}
		$arr['ishot_car']=$this->input->post('ishot_car');
		if($arr['ishot_car']=='1'){
			if($arr['type']==''){
				$arr['type']='1';
			}else{
				$arr['type']=$arr['type'].',1';
			}
			$arr['hottit']=$this->input->post('hottit');
			$arr['hotdes']=$this->input->post('hotdes');
		}else{
			$arr['hottit']='';
			$arr['hotdes']='';
		}
		$arr['nineoreight']=$this->input->post('nineoreight');
		if($arr['nineoreight']){
			if($arr['nineoreight']=='1'){
				if($arr['type']==''){
					$arr['type']='2';
				}else{
					$arr['type']=$arr['type'].',2';
				}
			}else if($arr['nineoreight']=='2'){
				if($arr['type']==''){
					$arr['type']='3';
				}else{
					$arr['type']=$arr['type'].',3';
				}
			}else{
				//  没有做出选择
			}
		}
        if(!$this->upload->do_upload('userfile')){
			echo '图片保存失败';
        }else{
			$data = array('upload_data' => $this->upload->data());
			$arr['img']='http://localhost/car/assets/images/'.$data['upload_data']['file_name'];	
        }
		$res=$this->Index_model->insert_allcar($arr);
		if($res){
			echo '车辆信息发布成功  --> <a href="http://localhost/car/index.php/Car_index" class="animBtn themeB">点我跳回主页</a>';
		}else{
			echo '车辆信息发布失败  --> <a href="http://localhost/car/index.php/Car_index" class="animBtn themeB">点我跳回主页</a>';
		}
	}
	public function admin(){
		$rs=$this->Index_model->showadmin();
		$tit=$this->Index_model->showcallus();
		$this->load->view('admin.php',array('rs'=>$rs,'tit'=>$tit));
	}
	public function adminyes(){
		$id=$this->input->get('id');
		$show = $this->Index_model->adminyes($id);
		if($show){
			$tit = '发布成功';
		}else{
			$tit = '发布失败';
		}
		$rs=$this->Index_model->showadmin();	
		$this->load->view('admin.php',array('rs'=>$rs,'tit'=>$tit));
	}
	public function adminno(){
		$id=$this->input->get('id');
		$show = $this->Index_model->adminno($id);
		if($show){
			$tit = '删除成功';
		}else{
			$tit = '删除失败';
		}
		$rs=$this->Index_model->showadmin();	
		$this->load->view('admin.php',array('rs'=>$rs,'tit'=>$tit));
	}
	public function seach(){
		$name=$this->input->get('sou');
		$res = $this->Index_model->toseach($name);
		$this->load->view('specials.php',array('all_car'=>$res));
	}
	public function xiangqing(){
		$id=$this->input->get('id');
		$car_message=$this->Index_model->get_allcar_toid($id);
		$this->load->view('xiangqing.php',array('car'=>$car_message));
	}
}

