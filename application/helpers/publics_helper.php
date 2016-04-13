<?php

/**
 * 登录验证
 * $ci  object  ci对象
 **/
function check_login($ci){
  /* CodeIgniter 资源 存储到ci */
  if( !$ci->session->userdata('userid') ){
    redirect('login/');
  }
}

/**
 * 权限验证
 * $ci  object  ci对象
 **/

function auth($ci)
{

  /* 验证用户权限能否访问控制器 */
  $type = $ci->session->userdata('usertype');
  $cons = $ci->uri->segment(1);

  switch($cons)
  {
    case 'admin':
      if($type !== '1'){
        echo "需要管理员权限问题";
        exit();
      }
      break;
    case 'ware':
      if($type !== '2'){
        echo '需要总仓管理员权限访问';
        exit();
      }
      break;
    case 'store':
      if($type !== '3'){
        echo '需要门店售后员权限访问';
        exit();
      }
      break;
    default:
      return true;
  }
}

/**
 * admin 操作出错提示方法
 * @param   $msg    错误信息
 * @param   $bak_url跳转页面
 */
function tips($msg)
{
  $ci = & get_instance();

  $ci->load->view('header',page_header(
    '操作出错',
    '操作错误',
    $ci->uri->segment(1)
  ));
  $ci->load->view('publics/error',array('msg'=>$msg));

  $ci->load->view('footer');
}
