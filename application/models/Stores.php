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
   * @param number  $start  分页开始
   * @param number  $end    分页显示页数
   * return array
   *
   **/
  public function get_store_table($start,$end)
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, r.buy_date,r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.from_s = "%s" AND r.state = s.state_code LIMIT %s,%s';
    $query = $this->db->query(sprintf($sql,$this->session->userdata('sector'),$start,$end));
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
   * 更改指定ID的数码状态
   * @param string $id 指定ID
   * return bool
   **/
  public function receive($id)
  {
    $sql    = "UPDATE records SET state='6',w_s_d='". date('Y-m-d')."' WHERE from_s = '".$this->session->userdata('sector')."' AND state = 5 AND id=$id";
    $query  = $this->db->query($sql);
    /* 获取执行结果 */
    $result = $this->db->affected_rows();

    if($result == 0){
      return false;
    }else{
      return true;
    } 
  }

  /**
   * 统计送修记录条数
   *
   **/
  public function get_table_num()
  {
    return $this->db->query(sprintf('SELECT COUNT(id) FROM records WHERE from_s = "%s"',$this->session->userdata('sector')))->result_array();
  }
}
