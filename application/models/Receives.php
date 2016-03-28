<?php

class Receives extends CI_Model
{

  protected $data;

  public function __construct()
  {
    $this->load->database();
    parent::__construct();
  }

  /**
   *
   * 用户接受返修产品更新数据库信息
   * @param   int   $id      产品ID
   * @param   int   $state   产品状态
   * @param   int   $user_id 用户id
   * @param   date  $date    更新时间   
   **/
  public function meet($id,$state,$user_id,$date){
    if($id !== '' && $state !== '' && $user_id !== '' && $date !== '')
    {
      $sql = sprintf(
        'UPDATE records SET state=state+1,s_w_d="%s",s_w_u="%s" WHERE id=%s AND state=%s',
        $date,
        $user_id,
        $id,
        $state
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

?>
