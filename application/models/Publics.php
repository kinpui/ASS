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

  /**
   * 获取颜色
   **/
  public function get_color()
  {
    return $this->db->query('SELECT * FROM color')->result_array();
  }


  /**
   * 搜索
   * 可定制条件搜索
   * @export 7 | 15
   * 查询7天 或 15天未返回的
   * @param   number  $additional 传入需要附加的sql
   **/
  public function search($additional = '')
  {
    $digital_type = $this->input->post('digital_type');
    $state        = $this->input->post('state');
    $region       = $this->input->post('region');
    $start_time   = $this->input->post('start_time');
    $end_time     = $this->input->post('end_time');
    $key_word     = $this->input->post('key');

    $sql = 'SELECT r.id,r.buy_date,r.customer_name,r.customer_phone,r.brand,d.`value`,s.state_msg FROM records r, state_code s,region re,sector se,digital_type d WHERE  d.id = r.digital_type AND  re.id = se.region AND se.`name` = r.from_s AND r.state = s.state_code ';

    /* 如果存在需要附加的sql。第一时间加上 */
    if(!empty($additional))
    {
      $sql .= $additional;
    }

    /* 设置了数码类型 */
    if(!empty($digital_type) && is_numeric($digital_type)){
      $sql .=  ' AND r.digital_type = '.$digital_type;
    }

    /* 设置了送修状态 */
    if(!empty($state) && is_numeric($state)){
      $sql .= ' AND r.state = '.$state;
    }

    /* 设置了区域划分 */
    if(!empty($region) && is_numeric($region)){
      $sql .= ' AND re.id = '.$region;
    }

    if(!empty($start_time) && !empty($end_time)){
      /* 如果有开始和结束的时间 */
      $sql .= " AND UNIX_TIMESTAMP('$start_time') <=  UNIX_TIMESTAMP(r.start_date) AND UNIX_TIMESTAMP('$end_time')   >=  UNIX_TIMESTAMP(r.start_date)";
    
    }else if(!empty($start_time)){
      /* 如果只有开始的时间 */
      $sql .= " AND UNIX_TIMESTAMP('$start_time') <=  UNIX_TIMESTAMP(r.start_date)";
    
    }else if(!empty($end_time)){
      /* 如果只有结束的时间 */
      $sql .= " AND UNIX_TIMESTAMP('$end_time')   >=  UNIX_TIMESTAMP(r.start_date)";
    }

    if(!empty($key_word)){
      /* 如果有关键字 */
      $sql .= " AND (    r.brand         LIKE '%$key_word%'
                    OR	r.customer_name LIKE '%$key_word%'
                    OR	r.fault         LIKE '%$key_word%'
                    OR	r.from_s        LIKE '%$key_word%'
                    )";
    }

    return $this->db->query($sql)->result_array();

  }

  /**
   * 查询需要导出的数据
   * @param   array   $value 传入的数据id组成的数组
   **/
  public function export($value)
  {
    $where = '';
    if(is_array($value))
    {
      foreach($value as $key){
        if($where == ''){
          $where  = "$key";
        }else{
          $where .= ",$key";
        }
      }

      $sql = 'SELECT * FROM records r,sector s WHERE r.from_s = s.`name` AND r.id IN('.$where.')';

      return $this->db->query($sql)->result_array();
    }else{
      return false;
    }
  }

  /* 厂家管理 */
  /**
   * 获取所有厂家
   * @param   $start  开始页数
   * @param   $end    结束页数
   *
   **/
  public function get_factory($start,$end)
  {
    $sql = 'SELECT * FROM factory LIMIT %s,%s;';
    return $this->db->query(sprintf($sql,$start,$end))->result();
  }

  /**
   * 获取厂家数量
   **/
  public function get_factory_num()
  {
    return $this->db->query("SELECT COUNT(id) FROM factory")->result_array();
  }



  /**
   * 获取门店数量
   **/
  public function get_store_num()
  {
    return $this->db->query('SELECT COUNT(id) FROM sector;')->result_array();
  }

  /**
   * 获取门店信息
   * return array
   **/
  public function get_store($start,$end)
  {
    if( $end == ''){
      die('参数错误');
    }
    /* 查询门店与所属区域信息 */
    $sql = 'SELECT s.*,r.region FROM sector s,region r WHERE s.region = r.id LIMIT %s,%s';
    return $this->db->query(sprintf($sql,$start,$end))->result();
  }




}
