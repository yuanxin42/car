<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_contact extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Contact_model');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('contact.php');
	}
	public function sendEmail(){
		$userName=$this->input->post('userName');
		$userEmail=$this->input->post('userEmail');
		$userPhone=$this->input->post('userPhone');
		$userMsg=$this->input->post('userMsg');
		$this->load->library('email'); // 引入email类
 
        // 配置选项
        $config['protocol'] = 'smtp'; // 使用smtp协议
        $config['smtp_host'] = 'ssl://smtp.qq.com'; // smtp主机
        $config['smtp_user'] = '1017123610@qq.com'; // smtp用户
        $config['smtp_pass'] = 'czednkavmjsybehd'; // 密码
		$config['smtp_port'] = 465;
		$config['charset'] = 'utf-8';
		$config['smtp_timeout'] = 30;
		$config['mailtype'] = 'text';
		$config['wordwrap'] = TRUE;
		$config['crlf'] = PHP_EOL;
		$config['newline'] = PHP_EOL;


      $this->email->initialize($config);
        // $config['crlf'] = "\r\n"; // 设置换行符
        // $config['newline'] = "\r\n"; // 设置换行符
        // $this->email->initialize($config); // 写入配置项
        $this->email->from('1017123610@qq.com'); // 发送者
        $this->email->to('1017123610@qq.com'); // 接收者
        $this->email->subject('second test'); // 主题
        $this->email->message('发送者名字-->'.$userName.'发送者邮箱-->'.$userEmail.'发送者电话-->'.$userPhone.'发送者信息-->'.$userMsg); // 内容
		$this->email->send();
		$res = $this->Contact_model->insert_msg($userName,$userEmail,$userPhone,$userMsg);
        // echo $res; // 发送，发送成功返回true
		if($res){
			echo '建议成功';
		}else{
			echo '建议失败';
		}
	}
}
