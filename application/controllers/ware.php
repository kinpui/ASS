<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *仓库售后员的controller
 *对应的view 文件夹是 view/ware
 *对应的model 文件是 models/ware.php
 **/

class Ware extends CI_Controller{

  public $menu = 'ware';
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','publics','header','page'));
    $this->load->library('session');

    /* 检测登录状态 */
    check_login($this);

    /* 访问控制 */
    auth($this);

    /* 加载模型器 */
    $this->load->model('Wares');
  }

  /**
   * 仓库售后员首页
   **/
  public function index(){
    $this->load->view('header', page_header(
      '仓库售后员',
      '主页',
      $this->menu
    ));
    $this->load->view('ware/index');
    $this->load->view('footer');
  }

  /**
   * 接收门店送修
   * 显示所有状态为1的信息
   * 记录接收时间
   * 改变数码状态为2
   **/
  public function get_s()
  {
    /* 分页 */
    $total_rows   = $this->Wares->get_num(1)[0]['COUNT(id)'];
    $url          = site_url('ware/get_s');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->get_s($page_config['nowindex'],$page_config['per_page']);
    /* views */
    $this->load->view('header', page_header(
      '接收门店送修设备',
      '所有门店送修信息',
      $this->menu
    ));
    $this->load->view('ware/get_s',$data);
    $this->load->view('footer');
  }


  /**
   * 送修厂家
   * 显示所有状态为2的信息
   * 记录送修厂家时间
   * 改变数码状态为3
   **/
  public function post_m()
  {

    /* 分页 */
    $total_rows   = $this->Wares->get_num(2)[0]['COUNT(id)'];
    $url          = site_url('ware/post_m');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->post_m($page_config['nowindex'],$page_config['per_page']);

    $this->load->view('header',page_header(
      '仓库送修到厂家',
      '仓库中所有待维修产品',
      $this->menu
    ));
    $this->load->view('ware/post_m',$data);
    $this->load->view('footer');
  }


  /**
   * 接收厂家返回
   * 显示所有状态为3的信息
   * 记录接收厂家返回时间
   * 改变数码状态为4
   **/
  public function get_m()
  {

    /* 分页 */
    $total_rows   = $this->Wares->get_num(3)[0]['COUNT(id)'];
    $url          = site_url('ware/get_m');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->get_m($page_config['nowindex'],$page_config['per_page']);

    $this->load->view('header',page_header(
      '厂家返回仓库',
      '所有厂家待返回的产品',
      $this->menu
    ));
    $this->load->view('ware/get_m',$data);
    $this->load->view('footer');
  }


  /**
   * 返回门店
   * 显示所有状态为4的信息
   * 记录返回时间
   * 改变数码状态为5
   */
  public function post_s()
  {

    /* 分页 */
    $total_rows   = $this->Wares->get_num(4)[0]['COUNT(id)'];
    $url          = site_url('ware/post_s');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->post_s($page_config['nowindex'],$page_config['per_page']);

    $this->load->view('header',page_header(
      '仓库返回门店',
      '仓库中可返回门店的产品',
      $this->menu
    ));
    $this->load->view('ware/post_s',$data);
    $this->load->view('footer');
  }

  /**
   * 显示所有记录
   * 显示所有的送修记录
   **/
  public function all_table()
  {

    /* 分页 */
    $total_rows   = $this->Wares->get_num()[0]['COUNT(id)'];
    $url          = site_url('ware/all_table');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->all_table($page_config['nowindex'],$page_config['per_page']);

    $this->load->view('header',page_header(
      '所有送修记录',
      '查看所有维修产品',
      $this->menu
    ));
    $this->load->view('ware/all_table',$data);
    $this->load->view('footer');
  }

  /**
   * 显示7天厂家没有返回的设备
   **/
  public function day_7_table()
  {

    /* 分页 */
    $total_rows   = $this->Wares->get_day_num(7)[0]['COUNT(id)'];
    $url          = site_url('ware/day_7_table');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->day_get(7,$page_config['nowindex'],$page_config['per_page']);

    $this->load->view('header',page_header(
      '7天为返回的送修记录',
      '查看所有7天内未维修完成的产品',
      $this->menu
    ));
    $this->load->view('ware/all_table',$data);
    $this->load->view('footer');
  }
    
  /**
   * 显示15天厂家没有返回的设备
   **/
  public function day_15_table()
  {

    /* 分页 */
    $total_rows   = $this->Wares->get_day_num(15)[0]['COUNT(id)'];
    $url          = site_url('ware/day_15_table');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Wares->day_get(15,$page_config['nowindex'],$page_config['per_page']);
    $this->load->view('header',page_header(
      '7天为返回的送修记录',
      '查看所有7天内未维修完成的产品',
      $this->menu
    ));
    $this->load->view('ware/all_table',$data);
    $this->load->view('footer');
  }

  /**
   * 送修厂家
   **/
  public function repair(){
    $id    = empty($this->uri->segment(3))?"":$this->uri->segment(3);
    $userid= $this->session->userdata('userid');

    if($id !== '' && $userid !== '')
    {

      $date = date('Y-m-d');

      if($this->Wares->repair($id,$userid,$date)){

        tips("送修厂家成功",'1');

      }else{
        
        tips('送修厂家失败');
      }
    }else{

      tips('非法操作');
    }
  }

  /**
   * 厂家返回给仓库
   **/
  public function return_w()
  {
    $id    = empty($this->uri->segment(3))?"":$this->uri->segment(3);
    $userid= $this->session->userdata('userid');

    if($id !== '' && $userid !== '')
    {
      $date = date('Y-m-d');

      /* 操作数据库 */
      if($this->Wares->return_w($id,$userid,$date)){
        tips('成功返回仓库','1');
      }else{
        tips('无法返回仓库.请重试');
      }
    }else{
      tips('非法操作');
    }
  }

  /**
   * 仓库返回门店
   **/
  public function return_s()
  {
    $id    = empty($this->uri->segment(3))?"":$this->uri->segment(3);
    $userid= $this->session->userdata('userid');

    if($id !== '' && $userid !== '')
    {
      $date = date('Y-m-d');

      /* 操作数据库 */
      if($this->Wares->return_s($id,$userid,$date)){
        tips('成功返回门店','1');
      
      }else{
        tips('无法返回门店.请重试');
      }
    }else{
      tips('非法操作');
    }
  }


  /**
   * 更新串码
   * 查看详细的URL 规范:
   *  http://addr/index.php/ware/newstring/{id}
   **/
  public function newstring(){
    $id = empty($this->uri->segment(3))?'':$this->uri->segment(3);
    if($id)
    {
      $this->load->helper('form');
      $this->load->model('Publics');
      /* 查询对于ID的信息信息 */
      $detales = $this->Publics->get_details($id);

      /* header 信息 */
      $header_data = array(
        'title'       => '送修详细信息',
        'page_title'  => '更改'.$detales[0]->customer_name.'的'.$detales[0]->brand.'串码信息',
        'menu_type'   => 'ware'
      );

      $this->load->view('header',$header_data);
      $this->load->view('ware/newstring',array('data'=>$detales[0]));
      $this->load->view('footer');

    }else{
      tips('非法操作');
    }
  }

  /**
   * 跟换串码处理操作
   **/
  public function newstring_h()
  {
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('newstring','Newstring','callback_check_null');  //购买日期
    $this->form_validation->set_rules('explain','Explain','callback_check_null');  //购买日期
    $this->form_validation->set_rules('id','Id','callback_check_null');  //购买日期

    if ($this->form_validation->run() == FALSE)
    {
      //redirect('ware/get_m');
      tips('修改出错');
    }else{
      if($this->Wares->newstring())
      {
        tips('成功修改串码','1');
      }else{
        tips('修改串码失败');
      }
    }
    
  }


  /**
   * 报价
   * 查看详细的URL 规范:
   *  http://addr/index.php/ware/newstring/{id}
   **/
  public function offer(){
    $id = empty($this->uri->segment(3))?'':$this->uri->segment(3);
    if($id)
    {
      $this->load->helper('form');
      $this->load->model('Publics');
      /* 查询对于ID的信息信息 */
      $detales = $this->Publics->get_details($id);

      /* header 信息 */
      $header_data = array(
        'title'       => '添加维修报价',
        'page_title'  => '为'.$detales[0]->customer_name.'的'.$detales[0]->brand.'设备添加报价',
        'menu_type'   => 'ware'
      );

      $this->load->view('header',$header_data);
      $this->load->view('ware/offer',array('data'=>$detales[0]));
      $this->load->view('footer');

    }else{
      tips('非法操作');
    }
  }

  /**
   * 报价处理操作
   **/
  public function offer_h()
  {
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('offer','Offer','callback_check_null');  //购买日期
    $this->form_validation->set_rules('reason','Reason','callback_check_null');  //购买日期
    $this->form_validation->set_rules('id','Id','callback_check_null');  //购买日期

    if ($this->form_validation->run() == FALSE)
    {
      tips('无法报价');
    }else{
      if($this->Wares->offer())
      {
        tips('成功报价','1');
      }else{
        tips('无法报价');
      }
    }
    
  }


  /**
   *
   * 验证字符串不为空
   *
   **/
  public function check_null($str)
  {
    if( $str == '' ){
      $this->form_validation->set_message('customer_name','带*的为必填表单');
      return false;
    }else{
      return true;
    }
  }


}
