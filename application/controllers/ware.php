<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *仓库售后员的controller
 *对应的view 文件夹是 view/ware
 *对应的model 文件是 models/ware.php
 **/

class Ware extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form','login'));
    $this->load->library('session');

    /* 检测登录状态 */
    check_login();

    /* 加载模型器 */
    $this->load->model('Wares');
  }

  /**
   * 仓库售后员首页
   **/
  public function index(){
    $this->load->view(
      'header',
      array(
        'title'       => '仓库售后员',
        'page_title'  => '主页',
        'nickname'    => $this->session->userdata('userid'),
        'menu_type'   => 'ware'
      )
    );
    
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
    $data['header'] = $this->page_header(
      '接收门店送修设备',
      '所有门店送修信息'
    );
    $data['table'] = $this->Wares->get_s();
    /* views */
    $this->load->view('header',$data['header']);
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
    $data['header'] = $this->page_header(
      '仓库送修到厂家',
      '仓库中所有待维修产品'
    );

    $data['table'] = $this->Wares->post_m();

    $this->load->view('header',$data['header']);
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
    $data['header'] = $this->page_header(
      '厂家返回仓库',
      '所有厂家待返回的产品'
    );

    $data['table'] = $this->Wares->get_m();

    $this->load->view('header',$data['header']);
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
    $data['header'] = $this->page_header(
      '仓库返回门店',
      '仓库中可返回门店的产品'
    );

    $data['table'] = $this->Wares->post_s();

    $this->load->view('header',$data['header']);
    $this->load->view('ware/post_s',$data);
    $this->load->view('footer');
  }

  /**
   * 显示所有记录
   * 显示所有的送修记录
   **/
  public function all_table()
  {
    $data['header'] = $this->page_header(
      '所有送修记录',
      '查看所有维修产品'
    );

    $data['table'] = $this->Wares->all_table();

    $this->load->view('header',$data['header']);
    $this->load->view('ware/all_table',array('table'=>$data['table']));
    $this->load->view('footer');
  }

  /**
   * 显示7天厂家没有返回的设备
   **/
  public function day_7_table()
  {
    $data['header'] = $this->page_header(
      '7天为返回的送修记录',
      '查看所有7天内未维修完成的产品'
    );

    $data['table'] = $this->Wares->day_get(7);

    $this->load->view('header',$data['header']);
    $this->load->view('ware/all_table',array('table'=>$data['table']));
    $this->load->view('footer');
  }
    
  /**
   * 显示15天厂家没有返回的设备
   **/
  public function day_15_table()
  {
    $data['header'] = $this->page_header(
      '7天为返回的送修记录',
      '查看所有7天内未维修完成的产品'
    );

    $data['table'] = $this->Wares->day_get(15);

    $this->load->view('header',$data['header']);
    $this->load->view('ware/all_table',array('table'=>$data['table']));
    $this->load->view('footer');
  }

  /**
   * 返回页面heade 需要的信息
   * @param sting $par1 页面title
   * @param sting $par2 页面内容title
   **/
  public function page_header($par1,$par2){
    return array(
      'title'     => $par1,
      'page_title'=> $par2,
      'nickname'  => $this->session->userdata('nickname'),
      'menu_type' => 'ware'
    );
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

        echo "送修厂家成功";

      }else{
        
        echo '送修厂家失败';
      }
    }else{

      echo '非法操作';
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
        echo '成功返回仓库';
        echo '<a href="'.base_url('ware/post_s').'" >';
      }else{
        echo '无法返回仓库.请重试';
      }
    }else{
      echo '非法操作';
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
        echo '成功返回门店';
        echo '<a href="'.base_url('ware/post_s').'" >';
      }else{
        echo '无法返回门店.请重试';
      }
    }else{
      echo '非法操作';
    }
  }
}
