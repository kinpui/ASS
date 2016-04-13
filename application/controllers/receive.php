<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receive extends CI_Controller
{

  public function __construct(){

    parent::__construct();
    $this->load->helper(array('url','login'));
    $this->load->library('session');
    /* 判断 */
    check_login($this);

    /* 加载数据模型 */
    $this->load->model('Receives');
  }


  /**
   * 接收记录
   * 接收信息规范:
   *  http://addr/index.php/receive/meet/{id}/state/
   *
   **/
  public function meet(){

    /* 接收数码设备的ID */
    $id     = empty($this->uri->segment(3))?'':$this->uri->segment(3);

    /* 接收状态码 */
    $state  = empty($this->uri->segment(4))?'':$this->uri->segment(4);

    /* 接收人编号 */
    $user_id= $this->session->userdata('userid');

    /* 接收时间 */
    $date   = date('Y-m-d');

    /* id,state,user_id 不能为空 */
    if(
      !empty($id) &&
      !empty($state) &&
      !empty($user_id)
    )
    {
      if($this->Receives->meet($id,$state,$user_id,$date)){

        echo '接收成功';
        echo '<a href="'.base_url('index.php/ware').'">继续接收</a>';
      }else{
        echo '接收不成功';
      }
    }else{
      echo '无权或非法操作';
    }

  }

}
