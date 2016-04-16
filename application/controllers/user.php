<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * 用户查询系统
 * 用户通过访问该程序
 * 输入正确的手机号码；即可查询到用户送往维修的手机信息
 *
 **/
class User extends CI_Controller{

  public function __construct()
  {

    parent::__construct();
    $this->load->helper(array('url','form'));
  }

  public function login()
  {

    /* 显示登陆页面 */
    $this->load->view('user/login');
  }

  public function check()
  {

    /* 加载表单处理程序  */
    $this->load->library('form_validation');

    $this->form_validation->set_rules('phone','Phone','callback_check_null');
  
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('user/login');
    }else{
      $this->load->model('Users');
      /* 到数据库查询 */
      $result = $this->Users->query();
      if($result)
      {
        /* 引入昵称 */
        $this->load->helper('nick');
        $data['result'] = $result;
        $this->load->view('user/time_axis',$data);
      }else{
        $this->load->view('user/null');
      }
    }
  }

  /**
   * 检查用户提交查询不为空
   **/
  public function check_null($str)
  {
    if($str == ''){
      return false;
    }else{
      return true;
    }
  }
}
