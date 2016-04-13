<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller 
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form','login'));
    $this->load->library('session');

  }


	public function index()
	{ 
    /* 检测是否登录 */
    check_login($this);
    $this->load->view('welcome');
  }


}
