<?php
  /**
   * 返回页面heade 需要的信息
   * @param sting $par1 页面title
   * @param sting $par2 页面内容title
   **/
function page_header($par1,$par2,$menu){
  $ci = & get_instance();

  return array(
    'title'     => $par1,
    'page_title'=> $par2,
    'nickname'  => $ci->session->userdata('nickname'),
    'menu_type' => $menu
  );
}
