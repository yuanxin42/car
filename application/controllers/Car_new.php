<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_new extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('New_model');
		$this->load->library('session');
	}
	public function index()
	{
		$nine=$this->New_model->nine_car();
		$eight=$this->New_model->eight_car();
		$this->load->view('new.php',array('nine_car'=>$nine,'eight_car'=>$eight));
	}
}
