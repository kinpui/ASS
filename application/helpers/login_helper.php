<?php

function check_login(){
  /* CodeIgniter 资源 存储到ci */
  $ci = & get_instance();

  if( !$ci->session->userdata('userid') ){
    redirect('login/');
  }
}
