<?php
class Swares extends CI_Model
{

  public $content;
  public $data;

  public function __construct()
  {
		$this->load->database();
    parent::__construct();
  }

  /**
   * 用户提交表单
   **/
  public function submit_form()
  {

    /* 所属门店 */
    $sector = $this->session->userdata('sector');

    /* 运送状态 (门店送往仓库)*/
    $state  = '1';

    /* 获取数据 */
    $data = array(
      'brand'         => $this->input->post('brand'),
      'string_code'   => $this->input->post('string_code'),
      'parts'         => $this->input->post('parts'),
      'digital_type'  => $this->input->post('digital_type'),
      'digital_color' => $this->input->post('digital_color'),
      'fault'         => $this->input->post('fault'),
      'remarks'       => $this->input->post('remarks'),
      'start_date'    => date('Y-m-d'),
      'state'         => $state,
      'from_s'        => $sector
    );


    /* 插入数据库 */
    if($this->db->insert('records', $data)){
      return true;
    }else{
      return false;
    }
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
   * 获取门店用户待接收记录
   * return array
   **/
  public function get_wait_table()
  {
    /* 根据门店进行查询 */
    $sql = 'SELECT r.id, start_date, r.customer_name,r.customer_phone,r.brand,r.digital_type,s.state_msg FROM 
records r,state_code s WHERE r.from_s = "'.$this->session->userdata('sector').'" AND state = 5 AND r.state = s.state_code';
echo $sql;
    $query = $this->db->query($sql);
    return $query->result();
  }

}
