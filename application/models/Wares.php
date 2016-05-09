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
   * @param   number  $start  分页开始
   * @param   number  $end    分页结束
   *
   * return array
   **/
  public function get_s($start,$end)
  {
    /* 判断是否经过了搜索 */
    if($this->uri->segment(3) == 'search')
    {
      /* 搜索 */
      $sql = ' AND r.state=1 ';
      /* 加载一个publics 模型 */
      $this->load->model('Publics');
      /* 运行模型中的基本search 方法 */
      return $this->Publics->search($sql);

    }
    if($end==''){return false;}
    /* 根据门店进行查询 */
    return $this->select_state('1',$start,$end);
  }

  /**
   * 仓库中所有可送修到厂家的产品
   * return array
   **/
  public function post_m($start,$end)
  {
    /* 判断是否经过了搜索 */
    if($this->uri->segment(3) == 'search')
    {
      /* 搜索 */
      $sql = ' AND r.state=2 ';
      /* 加载一个publics 模型 */
      $this->load->model('Publics');
      /* 运行模型中的基本search 方法 */
      return $this->Publics->search($sql);

    }
    if($end == '' ){return false;}
    /* 根据门店进行查询 */
   
    return $this->select_state('2',$start,$end);
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
   * @param   number  $start  分页开始
   * @param   number  $end    分页结束
   *
   * return 执行sql结果
   **/
  public function all_table($start,$end)
  {
    if($end == ''){return false;}

    $sql = 'SELECT r.*,d.value,s.state_msg FROM records r,state_code s,digital_type d WHERE r.state = s.state_code AND d.id = r.digital_type LIMIT %s,%s';
    $query  = $this->db->query(sprintf($sql,$start,$end));
    return $query->result_array();
  }

  /**
   * 显示所有厂家返回门店的产品
   * @param   number  $start  分页开始
   * @param   number  $end    分页结束
   *
   * return 执行sql结果
   **/
  public function get_m($start,$end)
  {
    /* 判断是否经过了搜索 */
    if($this->uri->segment(3) == 'search')
    {
      /* 搜索 */
      $sql = ' AND r.state=3 ';
      /* 加载一个publics 模型 */
      $this->load->model('Publics');
      /* 运行模型中的基本search 方法 */
      $result = $this->Publics->search($sql);
      return $result;
    }
    if($end == ''){return false;}
    return $this->select_state('3',$start,$end);
  } 

  /**
   *查询所有的可以返回门店的信息
   * @param   number  $start  分页开始
   * @param   number  $end    分页结束
   *
   * return 执行sql结果
   **/
  public function post_s($start,$end)
  {
    /* 判断是否经过了搜索 */
    if($this->uri->segment(3) == 'search')
    {
      /* 搜索 */
      $sql = ' AND r.state=4 ';
      /* 加载一个publics 模型 */
      $this->load->model('Publics');
      /* 运行模型中的基本search 方法 */
      return $this->Publics->search($sql);

    }

    if($end == ''){return false;}
    return $this->select_state('4',$start,$end);
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
   * @param   num   $day    逾期日期
   * @param   num   $start  开始日期
   * @param   num   $end    结束日期
   **/
  public function day_get($day,$start = '',$end = '')
  {
    if($day == '' && $start == '' && $end == ''){
      return false;
    }
    $time = $day*60*60*24;
    $sql = 'SELECT r.id, r.start_date, r.from_s, r.string_code, r.customer_name,r.customer_phone,r.brand,d.`value`,s.state_msg FROM records r,state_code s,digital_type d WHERE r.state = s.state_code AND r.digital_type = d.id AND UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(start_date) >= %s LIMIT %s,%s';

    $query = $this->db->query(sprintf($sql,$time,$start,$end));
    return $query->result_array();
  }

  /**
   * 查询门店送修的总数
   **/
  public function get_num($state = '')
  {
    if($state == ''){
      $sql =  'SELECT COUNT(id) FROM records';
    }else{
      $sql =  'SELECT COUNT(id) FROM records WHERE state ='.$state;
    }
    return $this->db->query($sql)->result_array();
  }

  /**
   * 查询指定天数的数据集合
   * @param   number  $day  指定天数
   **/
  public function get_day_num($day)
  {
    if($day == ''){return false;}
    
    $time = $day*60*60*24;
    $sql = 'SELECT count(id) FROM records WHERE state <> 7 AND UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(start_date) >= "%s"';
    return $this->db->query(sprintf($sql,$time))->result_array();
  }


  /**
   * 换新串码处理
   **/
  public function newstring()
  {
    $newstring  = $this->input->post('newstring');
    $explain    = $this->input->post('explain');
    $id         = $this->input->post('id');

    if($newstring !== '' && $explain !== '' && $id !== '')
    {
      if($this->db->update('records',array('new_string'=>$newstring,'new_string_explain'=>$explain),'id = '.$id)){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
  /**
   * 维修报价处理
   **/
  public function offer()
  {
    $offer  = $this->input->post('offer');
    $reason = $this->input->post('reason');
    $id     = $this->input->post('id');

    if($offer !== '' && $reason !== '' && $id !== '')
    {
      if($this->db->update('records',array('offer'=>$offer,'reason'=>$reason),'id = '.$id)){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }

 /**
   *
   * 用户接受返修产品更新数据库信息
   * @param   int   $id      产品ID
   * @param   int   $state   产品状态
   * @param   int   $user_id 用户id
   * @param   date  $date    更新时间   
   **/
  public function take($id,$user_id,$date)
  {
    if($id !== '' && $user_id !== '' && $date !== '')
    {
      $sql = sprintf(
        'UPDATE records SET state=state+1,s_w_d="%s",s_w_u="%s" WHERE id=%s AND state=1',
        $date,
        $user_id,
        $id
      );

      $this->db->query($sql);
      $result = $this->db->affected_rows();

      if($result){
        return true;
      }else{
        return false;
      }
    }
  
  }

  /**
   * search
   * @param num $day 查询一定天数范围外的记录
   **/
  public function search( $day='' )
  {
    $sql = '';
    if(!empty($day))
    {
      $time = $day*60*60*24;
      $sql .= ' AND r.state < 6 AND UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP(r.start_date) >= '.$time;
    }

    /* 加载一个publics 模型 */
    $this->load->model('Publics');
    /* 运行模型中的基本search 方法 */
    return $this->Publics->search($sql);
  }

  /**
   * 获取门店送修数量
   * @param   $state    送修途径状态
   **/
  public function get_state_num($state)
  {
    if(empty($state)){return false;}
    $sql = 'SELECT COUNT(id) FROM records WHERE state = '.$state;
    return $this->db->query($sql)->result_array()[0]['COUNT(id)'];
  }

  /**
   * 根据state 查询数据
   * @param   $state    设备状态
   * @param   $start    分页属性
   * @param   $end      分页属性
   * return   array     查询结果 
   **/
  public function select_state($state,$start,$end)
  {
    $sql = 'SELECT r.*,d.value FROM records r,digital_type d WHERE state=%s AND r.digital_type = d.id LIMIT %s,%s';
    $query = $this->db->query(sprintf($sql,$state,$start,$end));
    return $query->result_array();
  }

  /**
   * 根据区域号查询该区域下的所有门店送修信息
   * @param  $val  num  区域号码
   **/
  public function get_region_msg($val)
  {
    $sql    = '
      SELECT rec.from_s,COUNT(rec.from_s) as total ,
      (SELECT COUNT(*) FROM records WHERE from_s = rec.from_s AND state < 6) as surplus,
      (SELECT COUNT(*) FROM records WHERE from_s = rec.from_s AND state =6 ) as nottake
      FROM records rec WHERE from_s in(SELECT `name` FROM sector s,region r WHERE r.id = s.region AND r.id = %s)
      GROUP BY from_s
      ';
    return $this->db->query(sprintf($sql,$val))->result_array();
  }

  /**
   * 获取当天送修记录总和
   * @param  num  $day  日子的数量
   * @param  bool $re   是否计算返回的数量
   **/
  public function get_total($day,$re = '')
  {
    $sql = 'SELECT COUNT(*) as num FROM records WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(start_date) < 86000*'.$day;

    /* 判断是否计算返回的数量 */
    if(!empty($re))
    {
      $sql .= ' AND state >= 6';
    }

    return $this->db->query(sprintf($sql,$day))->result_array()['0']['num'];
  }

  /**
   * 退仓操作
   * 将state_code 该为8
   * @param   $id   需要处理的产品id
   **/
  public function back_s($id)
  {

    if($id !== '')
    {
      $sql = sprintf(
        'UPDATE records SET state=8 WHERE id=%s',
        $id
      );

      $this->db->query($sql);
      $result = $this->db->affected_rows();

      if($result){
        return true;
      }else{
        return false;
      }
    }

  }

}
