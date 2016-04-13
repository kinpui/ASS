<?php

function check_login($ci){
  /* CodeIgniter 资源 存储到ci */
  if( !$ci->session->userdata('userid') ){
    redirect('login/');
  }
}
