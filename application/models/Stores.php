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
    $sql = 'SELECT r.*,d.value,s.state_msg FROM records r,state_code s,digital_type d WHERE r.from_s = "%s" AND r.digital_type = d.id AND r.state = s.state_code LIMIT %s,%s';
    $sql = sprintf($sql,$this->session->userdata('sector'),$start,$end);
    $query = $this->db->query($sql);
    return $query->result_array();
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
   * 获取门店用户可取机记录
   * return array
   **/
  public function get_take_table()
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, start_date, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM 
records r,state_code s WHERE r.from_s = "'.$this->session->userdata('sector').'" AND state = 6 AND r.state = s.state_code';
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
    $sql    = "UPDATE records SET state='6',receive_d='". date('Y-m-d')."' WHERE from_s = '".$this->session->userdata('sector')."' AND state = 5 AND id=$id";
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
   * 更改指定ID的数码状态
   * @param string $id 指定ID
   * return bool
   **/
  public function take_h($id)
  {
    $sql    = "UPDATE records SET state='7',take_d='". date('Y-m-d')."' WHERE from_s = '".$this->session->userdata('sector')."' AND state = 6 AND id=$id";
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

  /**
   * 获取用户送修记录状态如果小于2；则返回true。
   * @param   number  id 删除的id号  
   * return bool
   **/
  public function get_record_status($id)
  {

    if($id == '' || !is_numeric($id)){return false;}

    $sql = sprintf('SELECT id FROM records WHERE from_s="%s" AND state < 2 AND id =%s',$this->session->userdata('sector'),$id);

    return $this->db->query($sql)->result_array();
  }

  /**
   * 删除用户送修记录
   * @param   number  id 删除的id号  
   * return bool
   **/
  public function del_record($id)
  {
    if($id == '' || !is_numeric($id)){return false;}
    
    if($this->db->delete(
      'records',
      'id='.$id.' AND from_s = "'.$this->session->userdata('sector').'"'
    ))
    {
      return true;
    }else{
      return false;
    }
  }

  /**
   * 处理搜索
   **/
  public function search()
  {
    $from_s = $this->session->userdata('sector');
    $sql = ' AND r.from_s = "'.$from_s.'" ';

    /* 加载公共model */
    $this->load->model('Publics');
    return $this->Publics->search($sql);
  }

}
