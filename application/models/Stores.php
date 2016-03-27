<?php

class Stores extends CI_Model
{

  public $content;
  public $data;

  public function __construct()
  {
		$this->load->database();
    parent::__construct();
  }

  /**
   * 获取门店用户送修记录
   * return array
   **/
  public function get_store_table()
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, r.buy_date,r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.from_s = "'.$this->session->userdata('sector').'" AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  }

  /**
   * 获取门店用户待接收记录
   * return array
   **/
  public function get_wait_table()
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, start_date, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM 
records r,state_code s WHERE r.from_s = "'.$this->session->userdata('sector').'" AND state = 5 AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  }


  /**
   * 获取指定ID的数码详细信息
   * @param string $id 指定ID
   * return array
   **/
  public function get_details($id)
  {
    $sql    = 'SELECT r.*,s.state_msg FROM records r,state_code s WHERE r.from_s = "12分店" AND r.state = s.state_code AND r.id = '.$id;
    $query  = $this->db->query($sql);
    return $query->result(); 
  }


  /**
   * 更改指定ID的数码状态
   * @param string $id 指定ID
   * return bool
   **/
  public function receive($id)
  {
    $sql    = "UPDATE records SET state='6',w_s_d='". date('Y-m-d')."' WHERE from_s = '".$this->session->userdata('sector')."' AND state = 5 AND id=$id";
    $query  = $this->db->query($sql);
    /************here**********/
    if(mysql_affected_rows() !== 0){
      return true;
    }else{
      return false;
    } 
  }

}
