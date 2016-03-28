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

}

