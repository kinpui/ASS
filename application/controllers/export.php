<?php

class Export extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    /* 加载publics mode */
    $this->load->model('Publics');

    $this->load->library(array('session','form_validation'));
    $this->load->helper(array('url','publics'));
  }

  /**
   * 获取用户选择的产品id
   **/
  public function get_select_id()
  {
    /* 获取需要导出的数据 */
    $select = $this->input->post('export[]');
    if(empty($select)){echo '非法操作'; return false;}
    return $select;
  }

  /**
   * 用户选择后点击提交触发
   **/
  public function run()
  {
    if(!$this->input->post('submit'))
    {
      return false;
    }
    $submit = $this->input->post('submit');

    $select = $this->get_select_id();
    switch($submit){
      case 'export':
          $this->form_validation->set_rules('export[]','Export[]','required');

          if($this->form_validation->run() == FALSE)
          {

            $this->tips('ware/index','你没有勾选需要导出的数据!返回上一页勾选好需要导出的数据再点击导出');
          }else{
            $select = $this->get_select_id();
            $data = $this->Publics->export($select);

            if(!$data){echo '非法操作';return false;}

            /* 调用自身导出函数 */ 
            $this->export($data);
          }
          break;
      case 'sware_export':
          $this->form_validation->set_rules('export[]','Export[]','required');

          if($this->form_validation->run() == FALSE)
          {

            $this->tips('sware/all_table','你没有勾选需要导出的数据!返回上一页勾选好需要导出的数据再点击导出');
          }else{
            $select = $this->get_select_id();
            $data = $this->Publics->export($select);

            if(!$data){echo '非法操作';return false;}

            /* 调用自身导出函数 */ 
            $this->export($data);
          }
          break;
      case 'batch_get_s':
        $this->batch_get_s($select);
        break;
      case 'batch_post_m':
        $this->batch_post_m($select);
        break;
      case 'batch_post_s':
        $this->batch_post_s($select);
        break;
      case 'batch_get_m':
        $this->batch_get_m($select);
        break;
      }
  }

  /**
   * 批量接收门店送修操作
   **/
  public function batch_get_s($select)
  {
    $data = $this->Publics->batch_get_s($select,1);
    if($data){
      $this->tips('ware/get_s','操作成功',1);
    }else{
      $this->tips('ware/get_s','操作失败');
    }
  }

  /**
   * 批量从厂家接收操作
   **/
  public function batch_get_m($select)
  {
    $data = $this->Publics->batch_get_m($select,1);
    if($data){
      $this->tips('ware/get_m','操作成功',1);
    }else{
      $this->tips('ware/get_m','操作失败');
    }
  }

  /**
   * 批量送修到厂家操作
   **/
  public function batch_post_m($select)
  {
    $data = $this->Publics->batch_post_m($select,1);
    if($data){
      $this->tips('ware/post_m','操作成功',1);
    }else{
      $this->tips('ware/post_m','操作失败');
    }
  }

  /**
   * 批量返回到门店操作
   **/
  public function batch_post_s($select)
  {
    $data = $this->Publics->batch_post_s($select,1);
    if($data){
      $this->tips('ware/post_s','操作成功',1);
    }else{
      $this->tips('ware/post_s','操作失败');
    }
  }


  /**
   * 导出操作
   **/
  public function export($data)
  {

    if(!$data){echo '非法操作';return false;}

    /* 根据条件进行查询导出excel */
    header( "Content-type:application/octet-stream"); 
    header( "Accept-Ranges:bytes"); 
    header( "Content-type:application/vnd.ms-excel");   
    header( "Content-Disposition:attachment;filename=导出表.xls");

    echo "<table width='100%' border='1' align='center' ><tr>"
    ,"<thead><td align='center' colspan='8'><font size=6>创宇售后还机单</font></td></tr>"
    ,"<tr><td align='center'><font size=4>送修时间</font></td>"
    ,"<td align='center'><font size=4>顾客姓名</font></td>"
    ,"<td align='center'><font size=4>顾客电话</font></td>"
    ,"<td align='center'><font size=4>型号</font></td>"
    ,"<td align='center'><font size=4>故障原因</font></td>"
    ,"<td align='center'><font size=4>串码</font></td>" 
    ,"<td align='center'><font size=4>送修门店</font></td>"
    ,"<td align='center'><font size=4>送修类型</font></td>"
    ,"</tr></thead><tbody>";

    foreach($data as $val){
      echo "<tr>
          <td>$val[start_date]</td>
          <td>$val[customer_name]</td>
          <td>$val[customer_phone]</td>
          <td>$val[brand]$val[types]</td>
          <td>$val[fault]</td>
          <td>$val[string_code]</td>
          <td>$val[from_s]</td>
          <td>$val[repair_type]</td>
        </tr>";
    }
    echo '</tbody></table>';
    exit;
    
  }

  /**
   * 提示
   * @param   $method   跳转方法
   * @param   $msg      错误信息
   **/
  public function tips($method,$msg,$status = '')
  {
    $menu = strtok($method, '/');
    $data = array(
      'msg'           => $msg,
      'callback'      => base_url("index.php/$method")
    );
    if($status)
    {
      $msg            = '批量处理成功';
      $data['status'] = 'success';
    }else{
      $msg            = '批量处理失败';
    }
    $this->load->view('header',array(
      'title'         =>$msg,
      'page_title'    =>$msg,
      'menu_type'     =>$menu
    ));
    $this->load->view('publics/error',$data);
    $this->load->view('footer');
  }
}
