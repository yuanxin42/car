<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_specials extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent:: __construct();
		$this->load->model('Specials_model');
	}
	public function index()
	{
		$allcar=$this->Specials_model->get_allcar();
		$this->load->view('specials.php',array('all_car'=>$allcar));
	}
	public function allcar(){
		$page=$this->input->get('page');
		$arr = array('page' => $page);
   		echo json_encode($arr);
	}
}
