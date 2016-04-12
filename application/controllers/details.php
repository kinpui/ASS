<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    
  }

  /**
   *
   * 查看详细的URL 规范:
   *  http://addr/index.php/details/show/{id}/{ment_type}
   **/
  public function show(){
    $id = empty($this->uri->segment(3))?'':$this->uri->segment(3);
    if($id)
    {
      $this->load->helper('nick');
      $menu = empty($this->uri->segment(4))?'publics':$this->uri->segment(4);
      $this->load->model('Publics');
      /* 查询对于ID的信息信息 */
      $detales = $this->Publics->get_details($id);

      /* header 信息 */
      $header_data = array(
        'title'       => '送修详细信息',
        'page_title'  => $detales[0]->customer_name.'的'.$detales[0]->brand.'送修情况',
        'menu_type'   => $menu
      );

      $this->load->view('header',$header_data);
      $this->load->view('publics/details',array('data'=>$detales[0]));
      $this->load->view('footer');

    }else{
      echo '非法操作';
    }
  }
}
