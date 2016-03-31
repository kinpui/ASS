<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{

  public $menu = 'admin';
  public function __construct()
  {

    parent::__construct();
    $this->load->library('session');
    $this->load->helper(array('url','login','header'));
    $this->load->model('Admins');

    check_login();
  }

  public function index()
  {

    /* 管理员主页 */
    $this->load->view('header',page_header(
      '系统管理员',
      '管理员主页',
      $this->menu
    ));
    $this->load->view('admin/index');  
    $this->load->view('footer');
  }

  /**
   * 显示用户列表
   **/
  public function users()
  {
    $this->load->view('header',page_header(
      '用户信息',
      '所有用户',
      $this->menu
    ));

    $data['table'] = $this->Admins->get_user_info();
    $this->load->view('admin/users',$data);
    $this->load->view('footer');
  }

  /**
   * 重编辑用户信息
   **/
  public function edit()
  {
    $this->load->helper('form');
    $id = $this->uri->segment(3);
    if(!empty($id))
    {
      /* 根据用户提供的id查找该id的详细信息 */
      $this->load->view('header',page_header(
        '修改用户信息',
        '编辑用户信息',
        $this->menu
      ));

      $this->load->view('admin/edit',array(
        'table'     => $this->Admins->get_id_info($id)[0],
        'usertypes'  => $this->Admins->get_user_type(),
        'sectors'   => $this->Admins->get_sector()
      ));
      $this->load->view('footer');
    }else{
      echo '非法操作';
    }
  }

  /**
   * 添加用户
   **/
  public function add(){
    $this->load->helper('form');
    $this->load->view('header',page_header(
      '添加用户',
      '填写新用户信息',
      $this->menu
    ));
    $data['usertypes'] = $this->Admins->get_user_type();
    $data['sectors']   = $this->Admins->get_sector();

    /** 新建sector表存储门店信息**/
    /** 到add 编写下拉菜单**/
    $this->load->view('admin/add',$data);
    $this->load->view('footer');
  }

  /**
   * 处理添加用户信息
   **/
  public function add_user()
  {
    /* 加载表单处理程序  */
    $this->load->library('form_validation');

    /* 验证数据不为空，且合法 */
    $this->form_validation->set_rules('username','Username','callback_check_null');
    $this->form_validation->set_rules('nickname','Nickname','callback_check_null');
    $this->form_validation->set_rules('password','Password','callback_check_null');
    $this->form_validation->set_rules('usertype','Usertype','callback_check_null');
    $this->form_validation->set_rules('sector','sector','callback_check_null');

    if($this->form_validation->run() == FALSE)
    {
      /* 添加用户不成功 */
      echo '添加用户不成功';
      //sleep(3);
      //redirect('admin/add');
    }else{

      if($this->uri->segment(3) == 'edit'){
        //编辑操作
        if($this->Admins->edit_user_handle()){
          echo '编辑用户信息成功';
        }else{
          echo '编辑用户信息过程中出错，请检查无误后重试';
        }
      }else{
        //新增操作
        /* 提交模型处理器处理 */
        if($this->Admins->add_user_handle())
        {
          echo '添加用户成功';
          //sleep(3);
          //redirect('admin/index');
        }else{
          echo '添加用户过程中出错;请重试';
          //sleep(3);
          //redirect('admin/add1');
        }
      }
    }
  }

  /**
   * 门店管理
   **/
  public function store()
  {

    $this->load->view('header',page_header(
      '门店管理',
      '查看门店信息',
      $this->menu
    ));

    $this->load->view('admin/store',array('table'=>$this->Admins->get_store()));
    $this->load->view('footer');
  }

  /**
   * 添加门店信息
   **/
  public function add_store()
  {

    $this->load->helper('form');
    $this->load->view('header',page_header(
      '添加门店',
      '填写新门店信息',
      $this->menu
    ));

    $this->load->view('admin/add_store',array(
      'regions'  => $this->Admins->get_region()
    ));
    $this->load->view('footer');
  }

  /**
   * 添加门店信息处理
   **/
  public function add_store_h()
  {
    /* 加载表单处理程序  */
    $this->load->library('form_validation');

    /* 验证数据不为空，且合法 */
    $this->form_validation->set_rules('storename','Storename','callback_check_null');
    $this->form_validation->set_rules('region','Region','callback_check_null');

    if($this->form_validation->run() == FALSE)
    {
      echo '添加门店信息不成功';
    }else{

      if($this->uri->segment(3) == 'edit'){
        //编辑操作
        if($this->Admins->edit_user_handle()){
          echo '编辑门店信息成功';
        }else{
          echo '编辑门店信息过程中出错，请检查无误后重试';
        }
      }else{
        //新增操作
        /* 提交模型处理器处理 */
        if($this->Admins->add_store_handle())
        {
          echo '添加门店成功';
        }else{
          echo '添加门店过程中出错;请重试';
        }
      }
    }
  
  }

  /**
   * 重编辑门店信息
   **/
  public function edit_store()
  {
    $this->load->helper('form');
    $id = $this->uri->segment(3);
    if(!empty($id))
    {

      /* 根据用户提供的id查找该id的详细信息 */
      $this->load->view('header',page_header(
        '修改门店信息',
        '编辑门店信息',
        $this->menu
      ));

      $this->load->view('admin/edit_store',array(
        'table'     => $this->Admins->get_store_info($id)[0],
        'regions'   => $this->Admins->get_region()
      ));
      $this->load->view('footer');
    }else{
      echo '非法操作';
    }
  }


  /**
   * 检测用户提交的数据是否不为空
   **/
  public function check_null($str)
  {
    if($str == '')
    {
      return false;
    }else{
      return true;
    }
  }
}
