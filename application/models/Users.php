<?php
class Users extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
    parent::__construct();
  }

  /**
   * 查询用户手机号码是否确实存在送修记录
   **/
  public function query()
  {
    $phone = $this->input->post('phone');

    if($phone == ''){return false;}
    return $this->db->query('SELECT * FROM records WHERE customer_phone = "'.$phone.'"')->result();
  }
}
