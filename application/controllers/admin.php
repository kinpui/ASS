<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{

  public $menu = 'admin';
  public function __construct()
  {

    parent::__construct();
    $this->load->library('session');
    $this->load->helper(array('url','publics','header','page'));
    $this->load->model('Admins');

    /* 检验登录 */
    check_login($this);

    /* 检验访问控制权限 */
    auth($this);

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
    /* 分页 */
    $total_rows   = $this->Admins->get_user_num()[0]['COUNT(id)'];
    $url          = site_url('admin/users');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table'] = $this->Admins->get_user_info($page_config['nowindex'],$page_config['per_page']);
    $this->load->view('header',page_header(
      '用户信息',
      '所有用户',
      $this->menu
    ));
    //var_dump($data['table']);return false;

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
        'usertypes' => $this->Admins->get_user_type(),
        'sectors'   => $this->Admins->get_sector()
      ));
      $this->load->view('footer');
    }else{
      tips('非法操作');
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
      tips('添加用户不成功');
      //sleep(3);
      //redirect('admin/add');
    }else{

      if($this->uri->segment(3) == 'edit'){
        //编辑操作
        if($this->Admins->edit_user_handle()){
          tips('编辑用户信息成功','1');
        }else{
          tips('编辑用户信息过程中出错，请检查无误后重试');
        }
      }else{
        //新增操作
        /* 提交模型处理器处理 */
        if($this->Admins->add_user_handle())
        {
          tips('添加用户成功','1');
        }else{
          tips('添加用户过程中出错;请重试');
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
    $this->load->model('Publics');
    /* 分页 */
    $total_rows   = $this->Publics->get_store_num()[0]['COUNT(id)'];
    $url          = site_url('admin/store');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $data['table']= $this->Publics->get_store($page_config['nowindex'],$page_config['per_page']);

    $this->load->view('header',page_header(
      '门店管理',
      '查看门店信息',
      $this->menu
    ));
    $data['edit'] = 'ture';
    $data['add'] = 'ture';

    $this->load->view('publics/store',$data);
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
    $this->form_validation->set_rules('addr','Addr','callback_check_null');
    $this->form_validation->set_rules('tel','Tel','callback_check_null');

    if($this->form_validation->run() == FALSE)
    {
      tips('添加门店信息不成功');
    }else{

      if($this->uri->segment(3) == 'edit'){
        //编辑操作
        if($this->Admins->edit_store_handle()){
          tips('编辑门店信息成功','1');
        }else{
          tips('编辑门店信息过程中出错，请检查无误后重试');
        }
      }else{
        //新增操作
        /* 提交模型处理器处理 */
        if($this->Admins->add_store_handle())
        {
          tips('添加门店成功','1');
        }else{
          tips('添加门店过程中出错;请重试');
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
      tips('非法操作');
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


  /**
   * 显示7天厂家没有返回的设备
   **/
  public function day_7_table()
  {
    $this->load->helper(array('form','search'));
    $this->load->model('Wares');

    $header       = page_header(
        '7天未返回的送修记录',
        '查看所有7天内未维修完成的产品',
        $this->menu
      );
    $header['css']= get_search_css();

    /* 分页 */
    $total_rows   = $this->Admins->get_table_num(7)[0]['COUNT(id)'];
    $url          = site_url('admin/day_7_table');
    $page_config  = set_page($url,$total_rows);
    $data['page']   = $this->pagination->create_links();

    $data['table'] = $this->Wares->day_get(7,$page_config['nowindex'],$page_config['per_page']);
    $this->load->view('header',$header);
    $search = get_search_data();
    $search['no_date']  = 'true';
    $search['action']   = 'admin/search/7';
    $this->load->view('publics/search',$search);
    $this->load->view('ware/all_table',$data);
    $this->load->view('footer',get_search_js());
  }

   
  /**
   * 显示15天厂家没有返回的设备
   **/
  public function day_15_table()
  {
    $this->load->helper(array('form','search'));
    $this->load->model('Wares');
    /* 分页 */
    $total_rows   = $this->Admins->get_table_num(15)[0]['COUNT(id)'];
    $url          = site_url('admin/day_15_table');
    $page_config  = set_page($url,$total_rows);
    $data['page']   = $this->pagination->create_links();

    /* 获取数据 */
    $data['table'] = $this->Wares->day_get(15,$page_config['nowindex'],$page_config['per_page']);
    $header = page_header(
      '15天未返回的送修记录',
      '查看所有15天内未维修完成的产品',
      $this->menu
    );
    $header['css'] = get_search_css();
    $this->load->view('header',$header);
    $search             = get_search_data();
    $search['no_date']  = 'true'; /* 没有日期的 */
    $search['action']   = 'admin/search/15';
    $this->load->view('publics/search',$search);
    $this->load->view('ware/all_table',$data);
    $this->load->view('footer',get_search_js());
  }

  /**
   * 所有产生的记录
   **/
  public function all_table()
  {
    $this->load->helper(array('form','search'));
    /* 分页 */
    $total_rows   = $this->Admins->get_table_num()[0]['COUNT(id)'];
    $url          = site_url('admin/all_table');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();

    $header       = page_header(
                      '所有送修记录',
                      '送修记录表',
                      $this->menu
                    );
    $header['css'] = get_search_css();

    $this->load->view('header',$header);

    /* 搜索框start */
    $search = get_search_data();
    $search['action'] = 'admin/search';
    $this->load->view('publics/search',$search);
    /* 搜索框end */

    $data['table'] = $this->Admins->get_all_table($page_config['nowindex'],$page_config['per_page']);

    $load_js = get_search_js();
    array_push($load_js['js_array'],'jquery.print.js');

    $this->load->view('store/table',$data);
    $this->load->view('footer',$load_js);
  }

  /**
   * 其他选项
   **/
  public function option()
  {
    $this->load->helper('form');
    $this->load->view('header',page_header(
      '常用选项',
      '设置系统各项参数',
      $this->menu
    ));

    $this->load->view('admin/option');
    $this->load->view('footer');
  }


  /**
   * 查看所有颜色
   **/
  public function show_color()
  {
    $this->load->view('header',page_header(
      '查看颜色设置',
      '所有颜色列表',
      $this->menu
    ));

    $data['table'] = $this->Admins->get_colors();

    $this->load->view('admin/color',$data);
    $this->load->view('footer');
  }

  /**
   * 添加颜色
   **/
  public function add_color()
  {
    /* 加载表单处理程序  */
    $this->load->library('form_validation');

    /* 验证数据不为空，且合法 */
    $this->form_validation->set_rules('color','Color','callback_check_null');

    if($this->form_validation->run() == FALSE)
    {
      tips('无法正确添加颜色');
    }else{

      if($this->Admins->add_color()){
        tips('颜色添加成功','1');
      }else{
        tips('无法正确添加颜色,请重试');
      }
    }
    
  }

  /**
   * 删除颜色
   **/
  public function del_color()
  {
    $id   = $this->uri->segment(3);
    $user = $this->session->userdata('userid');

    if(!empty($id) && !empty($user)){
      if($this->Admins->del_color($id))
      {
        tips('成功删除颜色','1');
      }else{
        tips('无法删除颜色,请重试');
      }
    }else{
      tips('非法操作');
      exit;
    }
  }

  /**
   * 添加厂家
   **/
  public function add_factory()
  {
    /* 加载表单处理程序  */
    $this->load->library('form_validation');

    /* 验证数据不为空，且合法 */
    $this->form_validation->set_rules('factory','Factory','callback_check_null');

    if($this->form_validation->run() == FALSE)
    {
      tips('无法正确添加颜色');
    }else{

      if($this->Admins->add_factory()){
        tips('厂家添加成功','1');
      }else{
        tips('无法正确添加厂家,请重试');
      }
    }
    
  }

  /**
   * 删除厂家
   **/
  public function del_factory()
  {
    $id   = $this->uri->segment(3);
    $user = $this->session->userdata('userid');

    if(!empty($id) && !empty($user)){
      if($this->Admins->del_factory($id))
      {
        tips('成功删除厂家','1');
      }else{
        tips('无法删除厂家,请重试');
      }
    }else{
      tips('非法操作');
      exit;
    }
  }

  /**
   * 查看条款
   **/
  public function clause()
  {
    $this->load->helper('form');
    $this->load->view('header',page_header(
      '售后条款',
      '查看或编辑条款',
      $this->menu
    ));
    $data['clause'] = $this->Admins->get_clause();
    $this->load->view('admin/clause',$data);
    $this->load->view('footer');
  }

  /**
   * 编辑条款
   **/
  public function edit_clause()
  {
    if(!empty($this->session->userdata('userid'))){
      if($this->Admins->edit_clause()){
        tips('编辑条款成功','1');
      }else{
        tips('编辑条款失败');
      }
    }
  }

  /* 数码类型管理 */

  /**
   * 查看所有数码类型
   **/
  public function show_digital()
  {
    $this->load->view('header',page_header(
      '查看数码类型',
      '所有数码列表',
      $this->menu
    ));

    $data['table'] = $this->Admins->get_digital();

    $this->load->view('admin/digital',$data);
    $this->load->view('footer');
  }

  /**
   * 添加数码类型
   **/
  public function add_digital()
  {
    /* 加载表单处理程序  */
    $this->load->library('form_validation');

    /* 验证数据不为空，且合法 */
    $this->form_validation->set_rules('digital','Digital','callback_check_null');

    if($this->form_validation->run() == FALSE)
    {
      tips('无法正确添加数码类型');
    }else{

      if($this->Admins->add_digital()){
        tips('数码类型添加成功','1');
      }else{
        tips('无法正确添加数码类型,请重试');
      }
    }
    
  }

  /**
   * 删除数码类型
   **/
  public function del_digital()
  {
    $id   = $this->uri->segment(3);
    $user = $this->session->userdata('userid');

    if(!empty($id) && !empty($user)){
      if($this->Admins->del_digital($id))
      {
        tips('成功删除数码类型','1');
      }else{
        tips('无法删除数码类型,请重试');
      }
    }else{
      tips('非法操作');
      exit;
    }
  }

  public function search()
  {

    $param = $this->uri->segment(3);
    
    /* 加载表单处理程序*/
    $this->load->library('form_validation');
    if(!empty($param))
    {
      $result = $this->Admins->search($param);
    }else{
      $result = $this->Admins->search();
    }

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
      $search['action'] = 'admin/search';
      $this->load->view('publics/search',$search);
      /* 搜索框end */
      $data['table']  = $result;

      $load_js = get_search_js();
      array_push($load_js['js_array'],'jquery.print.js');
      $this->load->view('publics/search_result',$data);
      $this->load->view('footer',$load_js);
      
    }else{
      redirect('admin/');
    }
  }

}
