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
    $sql = 'SELECT r.id, r.start_date, r.string_code, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM records r,state_code s WHERE r.state=1 AND r.state = s.state_code';
    $query = $this->db->query($sql);
    return $query->result();
  }
}
