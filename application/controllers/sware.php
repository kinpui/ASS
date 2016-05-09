<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *小仓库售后员的controller
 *对应的view 文件夹是 view/sware
 *对应的model 文件是 models/sware.php
 **/

class Sware extends CI_Controller{

  public $menu = 'sware';
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
    $this->load->model('Stores');
  }

  /**
   * 仓库售后员首页
   **/
  public function index(){
    $this->load->view('header', page_header(
      '小仓库售后员',
      '主页',
      $this->menu
    ));
    $this->load->view('sware/index');
    $this->load->view('footer');
  }


  /**
   *
   * 添加送修表
   *
   **/
  public function add()
  {
    $this->load->model('Publics');
    $this->load->helper('form');
    $data = array();
    $data = $this->get_user_info($data);

    /* 视图 */
    $this->load->view('header',page_header(
      '添加送修表',
      '送修表填写',
      $this->menu
    ));
    /* 数码类型 */

    $data['digital_type'] = $this->Publics->get_digital_type();
    $data['color'] = $this->Publics->get_color();
    $data['brand'] = $this->Publics->get_brand();

    $this->load->view('sware/add',$data);
    $this->load->view('footer');
  
  }

  /**
   *  确认接收仓库返回的手机
   **/
  public function take_h(){

   $id = empty($this->uri->segment(3))?'':$this->uri->segment(3);
   if($id)
   {
     $result = $this->Stores->take_h($id);
     if($result){
       tips('take','接收成功','1');
     }else{
       tips('take','取机失败,请重试');
     }
   }else{
     tips('index','非法操作');
   }
  }


  /**
   *
   * 显示送修列表
   *
   **/
  public function all_table()
  {
    $this->load->helper(array('page','form','search'));
    $data = array();
    $data = $this->get_user_info($data);

    $header = page_header(
      '送修列表',
      '我的送修记录',
      $this->menu
    );
    $header['css'] = get_search_css();

    $this->load->view('header',$header);

    /* 分页 */
    $total_rows   = $this->Stores->get_table_num()[0]['COUNT(id)'];
    $url          = site_url('sware/all_table');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();

    $data['table']= $this->Stores->get_store_table($page_config['nowindex'],$page_config['per_page']);

    /* 视图 */
    $search       = get_search_data();

    /* 加载js */
    $load_js = get_search_js();
    array_push($load_js['js_array'],'jquery.print.js');

    $search['action']='sware/search'; 
    $this->load->view('publics/search',$search);
    $this->load->view('sware/table.php',$data);
    $this->load->view('footer',$load_js);
  }

  /**
   *
   * 验证用户提交的送修表单并存储
   *
   **/
  public function submit_form()
  {
    $this->load->library('form_validation');

    $this->load->model('Swares');
    /* 验证部分字段不为空 */

    $this->form_validation->set_rules('brand','Brand','callback_check_null');  //品牌
    $this->form_validation->set_rules('string_code','String_code','callback_check_null');  //串码
    $this->form_validation->set_rules('remarks','Remarks','callback_check_null');  //故障原因

    if ($this->form_validation->run() == FALSE)
    {
      /* 返回添加页面 */
      redirect('sware/add');
    }else{
      if($this->Swares->submit_form()){
        tips('add','添加成功',1);
      }else{
        tips('add','添加失败。请重新添加');
      }
    }
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

    /* 查询待接收 */
    $data['table'] = $this->Stores->get_wait_table();
    
    /* 视图 */
    $this->load->view('header',page_header(
      '待处理列表',
      '待处理记录',
      $this->menu
    ));
    
    $this->load->view('sware/wait.php',$data);
    $this->load->view('footer');
  }


  /**
   *  确认接收仓库返回的手机
   **/
  public function receive(){

    $id = empty($this->uri->segment(3))?'':$this->uri->segment(3);
    if($id)
    {
      $result = $this->Stores->receive($id);
      if(!$result){
       tips('wait','接机失败,请重试');
      }else{
       tips('wait','接收成功','1');
      }
    }else{
      tips('index','非法操作');
    }
  }

  /**
   * 显示客户可取回的设备
   **/
  public function take()
  {
    $data = array();
    $data = $this->get_user_info($data);

    /* 查询待接收 */
    $data['table'] = $this->Stores->get_take_table();

    /* 视图 */
    $this->load->view('header',page_header(
      '待处理列表',
      '待处理记录',
      $this->menu
    ));
    
    $this->load->view('sware/take.php',$data);
    $this->load->view('footer');
  }

  /**
   * 所有未返回的设备
   **/
  public function not_return()
  {
    $this->load->helper(array('form','search'));
    $header = page_header(
      '送修列表',
      '我的送修记录',
      $this->menu
    );

    $this->load->view('header',$header);

    $data['table']= $this->Stores->not_return();
    if(empty($data['table']))
    {
      $data['not'] = 'true';  
    }

    /* 加载js */
    $load_js = get_search_js();
    array_push($load_js['js_array'],'jquery.print.js');

    $this->load->view('sware/table.php',$data);
    $this->load->view('footer',$load_js);
  } 

  /**
   * 筛选
   **/
  public function search()
  {

    /* 加载表单处理程序*/
    $this->load->library('form_validation');

    /* 处理筛选数据 */
    $result = $this->Stores->search();
    if($result){
      /* 筛选结果页 */

      $this->load->helper(array('form','search'));

      $header       = page_header(
                        '筛选结果',
                        '筛选结果记录',
                        $this->menu
                      );
      $header['css'] = get_search_css();

      $this->load->view('header',$header);

      /* 搜索框start */
      $search = get_search_data();
      $search['action'] = 'sware/search';
      $this->load->view('publics/search',$search);
      /* 搜索框end */
      $data['table']  = $result;
      $this->load->view('publics/search_result',$data);
      $this->load->view('footer',get_search_js());
    }else{
      tips('all_table','没有查找到相应的送修记录');
    }
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
    $data['sector']   = $this->session->userdata('sector');

    return $data;
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

  /**
   * 修改密码
   **/
  public function password()
  {
    $this->load->helper('form');

    $this->load->view('header',page_header('修改账号登录密码','修改密码',$this->menu));
    $this->load->view('publics/pass');
    $this->load->view('footer');
  }

  /**
   * 修改密码操作 
   **/
  public function changepass()
  {
  
    $this->load->library('form_validation');
    $this->load->model('Publics');

    /* 验证部分字段不为空 */
    $this->form_validation->set_rules('oldPass','OldPass','callback_check_null');  //购买日期
    $this->form_validation->set_rules('newPass','NewPass','callback_check_null'); //顾客姓名

    if ($this->form_validation->run() == FALSE)
    {
      tips('password','请正确输入旧密码和新密码');
    }else{
      if($this->Publics->verifyPass())
      {
        tips('index','您已成功修改密码，请牢记新密码','true');
      }else{
        tips('password','你输入的旧密码有误');
      }
    }

  }

  /**
   * 删除用户送修记录
   **/
  public function del()
  {
    $id = empty($this->uri->segment(3))?'':$this->uri->segment(3);

    if($id == ''){
      tips('all_table','非法操作');
      return false;
    }else{
      $this->load->model('Stores');
      /* 获取该记录转态。如果大于等于2。则失败  */
      if($this->Stores->get_record_status($id))
      {
        if($this->Stores->del_record($id))
        {
          tips('all_table','已经删除','1');
        }else{
          tips('all_table','删除不成功');
        }
      }else{
        tips('all_table','已经送出。无法删除');
      }
    }
  }
}
