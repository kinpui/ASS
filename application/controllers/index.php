<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library('session');

  }


	public function index()
	{ 
    $this->check_login();
		$this->load->view('index',array('title'=>'创宇数码售后系统'));
	}


  protected function check_login(){
    $this->session->userdata('userid');
    /* 检查是否登录 */
    if( !$this->session->userdata('userid') ){
      redirect('login/');
    }
  }
}
