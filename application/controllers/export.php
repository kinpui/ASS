<?php

class Export extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->library(array('session','form_validation'));
    $this->load->helper('publics');
    $this->load->model('Exports');
  }

  public function run()
  {
    if(!$this->input->post('submit'))
    {
      return false;
    }

    $this->form_validation->set_rules('export[]','Export[]','required');

    if($this->form_validation->run() == FALSE)
    {

      echo '你没有勾选需要导出的数据!返回上一页勾选好需要导出的数据再点击导出';
    }else{

      /* 获取需要导出的数据 */
      $select = $this->input->post('export[]');
      if(empty($select)){echo '非法操作'; return false;}

      /* 加载publics mode */
      $this->load->model('Publics');
      $data = $this->Publics->export($select);

      if(!$data){echo '非法操作';return false;}

      /* 调用自身导出函数 */ 
      $this->export($data);
    }
    return false;

  }

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
          <td>$val[brand]</td>
          <td>$val[fault]</td>
          <td>$val[string_code]</td>
          <td>$val[from_s]</td>
          <td>$val[repair_type]</td>
        </tr>";
    }
    echo '</tbody></table>';
    exit;
    
  }
}
