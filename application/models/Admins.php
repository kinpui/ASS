<?php
class Admins extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
    parent::__construct();
  }

  /**
   * 获取用户列表
   **/
  public function get_user_info()
  {
    
    $sql = 'SELECT u.id,u.nickname,u.sector,u.username,j.userjob FROM `user` u, `userjob` j  WHERE u.usertype = j.usertype';
    return $result = $this->db->query($sql)->result();
  }

  /**
   * 获取指定ID用户信息
   **/
  public function get_id_info($id)
  {
    if(!empty($id)){
      $sql = 'SELECT u.id, u.username, u.nickname, u.`password`, u.sector, j.userjob FROM `user` u, `userjob` j WHERE u.usertype = j.usertype AND u.id = '.$id;
      $result = $this->db->query($sql)->result();
      return $result;
    }else{
      echo "请正确操作";
      return false;
    }
  }

  /**
   * 获取用户类型
   **/
  public function get_user_type()
  {
    $sql = 'SELECT * FROM userjob';
    return $this->db->query($sql)->result();
  }

  /**
   * 获取门店信息
   **/
  public function get_sector()
  {
    $sql = 'SELECT name FROM sector';
    return $this->db->query($sql)->result();
  }

  /**
   * 添加用户信息处理
   **/
  public function add_user_handle()
  {

    /* 获取数据*/
    $data = array(
      'username'  => $this->input->post('username'),
      'nickname'  => $this->input->post('nickname'),
      'password'  => $this->input->post('password'),
      'usertype'  => $this->input->post('usertype'),
      'sector'    => $this->input->post('sector')
    );

    if(@$this->db->insert('user',$data)){
      return true;
    }else{
      return false;
    }
  }
  
  /**
   * 编辑用户信息处理
   **/
  public function edit_user_handle()
  {

    $username  = $this->input->post('username');
    /* 获取数据*/
    $data = array(
      'nickname'  => $this->input->post('nickname'),
      'password'  => $this->input->post('password'),
      'usertype'  => $this->input->post('usertype'),
      'sector'    => $this->input->post('sector')
    );

    $where = ' username='.$username;
    if(@$this->db->update('user',$data,$where)){
      return true;
    }else{
      return false;
    }
  }

  /**
   * 获取门店信息
   * return array
   **/
  public function get_store()
  {
    /* 查询门店与所属区域信息 */
    $sql = 'SELECT s.*,r.region FROM sector s,region r WHERE s.region = r.id;';
    return $this->db->query($sql)->result();
  }

  /**
   * 获取区域信息
   * return array
   **/
  public function get_region()
  {
    return $this->db->query('SELECT * FROM region')->result();
  }

  /**
   * 添加门店信息处理
   **/
  public function add_store_handle()
  {

    /* 获取数据*/
    $data = array(
      'name'    => $this->input->post('storename'),
      'region'  => $this->input->post('region'),
    );

    if(@$this->db->insert('sector',$data)){
      return true;
    }else{
      return false;
    }
  }

  /**
   * 编辑门店信息处理
   **/
  public function edit_store_handle()
  {

    $username  = $this->input->post('username');
    /* 获取数据*/
    $data = array(
      'nickname'  => $this->input->post('nickname'),
      'password'  => $this->input->post('password'),
      'usertype'  => $this->input->post('usertype'),
      'sector'    => $this->input->post('sector')
    );

    $where = ' username='.$username;
    if(@$this->db->update('user',$data,$where)){
      return true;
    }else{
      return false;
    }
  }

  /**
   * 获取指定ID门店信息
   **/
  public function get_store_info($id)
  {
    if(!empty($id)){
      $sql = 'SELECT s.id,s.`name`,r.region FROM sector s,region r WHERE s.region = r.id AND s.id = '.$id;
      $result = $this->db->query($sql)->result();
      return $result;
    }else{
      echo "请正确操作";
      return false;
    }
  }


}
