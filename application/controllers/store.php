<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->library('session');
  }

  public function index()
  {
    $data = array();
    $data = $this->get_user_info($data);
    $this->load->view('store/index',$data);
  }

  /**
   *
   * 添加送修表
   *
   **/
  public function add()
  {
    $this->load->helper('form');
    $data = array();
    $data = $this->get_user_info($data);
    $this->load->view('store/add.php',$data);
  
  }

  /**
   *
   * 显示送修列表
   *
   **/
  public function table()
  {
    $data = array();
    $data = $this->get_user_info($data);
    $this->load->view('store/table.php',$data);
  }

  /**
   *
   * 显示待处理事项
   *
   **/
  public function wait()
  {
    $data = array();
    $data = $this->get_user_info($data);
    $this->load->view('store/wait.php',$data);
  }

  /**
   *
   * 用户session 信息
   *
   **/
  protected function get_user_info($data)
  {
    $data['nickname'] = $this->session->userdata('nickname');
    $data['username'] = $this->session->userdata('username');
    $data['userid']   = $this->session->userdata('userid');
    $data['usertype'] = $this->session->userdata('usertype');

    return $data;
  }

  /**
   *
   * 验证用户提交的送修表单并存储
   *
   **/
  public function submit_form()
  {
    $this->load->library('form_validation');
    $this->load->database();/* 初始化数据库连接 */

    /* 验证部分字段不为空 */

    $this->form_validation->set_rules('buy_date','Buy_date','callback_isset');  //购买日期
    $this->form_validation->set_rules('customer_name','Customer_name','callback_isset'); //顾客姓名
    $this->form_validation->set_rules('customer_phone','Customer_phone','callback_isset|check_number');  //联系电话
    $this->form_validation->set_rules('brand','Brand','callback_isset');  //品牌
    $this->form_validation->set_rules('string_code','String_code','callback_isset');  //串码
    $this->form_validation->set_rules('remarks','Remarks','callback_isset');  //故障原因

    if ($this->form_validation->run() == FALSE)
    {
      /* 返回添加页面 */
      $this->load->view('warehouse/add');
    }else{
    /* 获取数据 */
    $data = array(
      'buy_date'  => $this->input->post('buy_date'),
      'customer_name'  => $this->input->post('customer_name'),
      'customer_phone'  => $this->input->post('customer_phone'),
      'brand'  => $this->input->post('brand'),
      'string_code'  => $this->input->post('string_code'),
      'appearance'  => $this->input->post('appearance'),
      'screen'  => $this->input->post('screen'),
      'parts'  => $this->input->post('parts'),
      'digital_type'  => $this->input->post('digital_type'),
      'digital_color'  => $this->input->post('digital_color'),
      'fault'  => $this->input->post('fault'),
      'remarks'  => $this->input->post('remarks'),
      'repair_type'  => $this->input->post('repair_type'),
      'repair_type'  => $this->input->post('repair_type'),
      'start_date'  => date('Y-m-d'),
    );

    /***************************here**/

    }

  }
}
