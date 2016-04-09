<?php
class Publics extends CI_Model
{
  public function __construct()
  {

    parent::__construct();
		$this->load->database();
  }

  /**
   * 获取指定ID的数码详细信息
   * @param string $id 指定ID
   * return array
   **/
  public function get_details($id)
  {
    $sql    = 'SELECT * FROM records WHERE id = '.$id;
    $query  = $this->db->query($sql);
    return $query->result(); 
  }

  /**
   * 获取指定数码类型信息
   * return array
   **/
  public function get_digital_type()
  {
    return $this->db->query('SELECT * FROM digital_type')->result_array();  
  }

  /**
   * 获取送修位置信息
   * return array
   **/
  public function get_state()
  {

    return $this->db->query('SELECT * FROM state_code ')->result_array();
  }

  /**
   * 区域划分
   * return array
   **/
  public function get_region()
  {
    return $this->db->query('SELECT * FROM region')->result_array();
  }
}

