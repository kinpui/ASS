<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publ extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->library('session');
    $this->load->helper(array('url','publics','header','page'));

    /* 检验登录 */
    check_login($this);

    /* 检验访问控制权限 */
    auth($this);
    $this->load->model('Publics');
  }

  /**
   * ware 中查看所有厂家
   **/
  public function ware_factory()
  {
    $this->show_factory('ware');
  }

  /**
   * admin 中查看所有厂家
   **/
  public function admin_factory()
  {
    $this->show_factory('admin','del');
  }

  /**
   * store 中查看所有厂家
   **/
  public function store_factory()
  {
    $this->show_factory('store');
  }


  /* 厂家管理 */
  /**
   * 查看所有厂家
   * @param $menu 菜单列表的类型
   * @param $del  是否存在删除按钮 默认不存在
   **/
  public function show_factory($menu,$del = '')
  {

    /* 分页 */
    $total_rows   = $this->Publics->get_factory_num()[0]['COUNT(id)'];
    $url          = site_url('publ/'.$menu.'_factory');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $this->load->view('header',page_header(
      '查看厂家信息',
      '所有厂家列表',
      $menu
    ));

    $data['table'] = $this->Publics->get_factory($page_config['nowindex'],$page_config['per_page']);

    if($del)
    {
      $data['del'] = true;
    }

    $this->load->view('publics/factory',$data);
    $this->load->view('footer');
  }

  /* 门店通讯录 */

  /* 仓库人员 */
  public function ware_store()
  {
    $this->show_store('ware');
  }
  /* 门店人员 */
  public function store_store()
  {
    $this->show_store('store');
  }

  /**
   * 显示门店通讯录
   **/
  public function show_store($menu)
  {
    /* 分页 */
    $total_rows   = $this->Publics->get_store_num()[0]['COUNT(id)'];
    $url          = site_url('publ/'.$menu.'_store');
    $page_config  = set_page($url,$total_rows);
    $data['page'] = $this->pagination->create_links();
    $this->load->view('header',page_header(
      '查看门店信息',
      '所有门店列表',
      $menu
    ));

    $data['table'] = $this->Publics->get_store($page_config['nowindex'],$page_config['per_page']);
    $this->load->view('publics/store',$data);
    $this->load->view('footer');
  }



}
