<?php

class Export extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->library('session');
    $this->load->helper('publics');
    $this->load->model('Exports');
  }

  public function condition()
  {

    /* 根据条件进行查询导出excel */
    header( "Content-type:application/octet-stream"); 
    header( "Accept-Ranges:bytes"); 
    header( "Content-type:application/vnd.ms-excel");   
    header( "Content-Disposition:attachment;filename=导出表.xls");

    echo "<table width='100%' border='1' align='center' ><tr>"
    ,"<td align='center' colspan='8'><font size=6>创宇售后还机单</font></td></tr>"
    ,"<tr><td align='center'><font size=4>送修时间</font></td>"
    ,"<td align='center'><font size=4>顾客姓名</font></td>"
    ,"<td align='center'><font size=4>顾客电话</font></td>"
    ,"<td align='center'><font size=4>型号</font></td>"
    ,"<td align='center'><font size=4>故障原因</font></td>"
    ,"<td align='center'><font size=4>串码</font></td>" 
    ,"<td align='center'><font size=4>送修门店</font></td>"
    ,"<td align='center'><font size=4>送修类型</font></td>"
    ,"</tr>";

    exit;
  }
}
