<?php

function set_page($url,$total_rows)
{
  $ci = & get_instance();

  
  // 分页
  $ci->load->library('pagination');
  $page_config['per_page']    = 5;   //每页条数
  $page_config['total_rows']  = $total_rows;
  $page_config['base_url']    = $url;//url
  $page_config['uri_segment'] =3;//参数取 index.php之后的段数，默认为3，即index.php/control/function/18 这种形式
  $page_config['nowindex']    =$ci->uri->segment($page_config['uri_segment']) ? $ci->uri->segment($page_config['uri_segment']):1;//当前页
  $ci->pagination->initialize($page_config);

  return $page_config;
}
