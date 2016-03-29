<?php
class Wares extends CI_Model
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
  public function get_s()
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state=1 AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  }

  /**
   * 仓库中所有可送修到厂家的产品
   * return array
   **/
  public function post_m()
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state=2 AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  }

  /**
   * 仓库送修到厂家
   **/
  public function repair($id,$userid,$date)
  {

    if($id !== '' && $userid !== '' && $date !== '')
    {
      $sql    = 'UPDATE records SET state = 3 ,w_m_d = "%s",w_m_u = "%s" WHERE state = 2 AND id = %s';
      $query  = $this->db->query(sprintf($sql,$date,$userid,$id));
      $result = $this->db->affected_rows();

      if($result){
        return true;
      }else{
        return false;
      }
    }else{

      return false;
    }
  }

  /**
   * 显示所有送修产品
   **/
  public function all_table()
  {

    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state = s.state_code';
    $query  = $this->db->query($sql);
    return $query->result();
  }

  /**
   * 显示所有厂家返回门店的产品
   **/
  public function get_m()
  {

    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state=3 AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  } 

  /**
   *查询所有的可以返回门店的信息
   **/
  public function post_s()
  {
    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state=4 AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  }

  /**
   * 厂家返回产品到仓库
   **/
  public function return_w($id,$userid,$date)
  {

    if($id !== '' && $userid !== '' && $date !== '')
    {
      $sql    = 'UPDATE records SET state = 4 ,m_w_d = "%s",m_w_u = "%s" WHERE state = 3 AND id = %s';
      $query  = $this->db->query(sprintf($sql,$date,$userid,$id));
      $result = $this->db->affected_rows();

      if($result){
        return true;
      }else{
        return false;
      }
    }else{

      return false;
    }
  }

  /**
   * 仓库返回产品到门店
   **/
  public function return_s($id,$userid,$date)
  {

    if($id !== '' && $userid !== '' && $date !== '')
    {
      $sql    = 'UPDATE records SET state = 5 ,w_s_d = "%s",w_s_u = "%s" WHERE state = 4 AND id = %s';
      $query  = $this->db->query(sprintf($sql,$date,$userid,$id));
      $result = $this->db->affected_rows();

      if($result){
        return true;
      }else{
        return false;
      }
    }else{

      return false;
    }
  }

  /**
   * 查询7天内没有返回的送修产品
   **/
  public function day_get($day)
  {
    $time = $day*60*60*24;
    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state = s.state_code AND UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(start_date) >= '.$time;
    $query = $this->db->query($sql);
    return $query->result();
  }


  /**
   * 返回15天内没有返回的送修产品
   **/


}
