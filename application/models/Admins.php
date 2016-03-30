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
}
