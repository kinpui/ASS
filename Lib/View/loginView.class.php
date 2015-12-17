<?php

class loginView{

  public function login(){
    global $smarty;

    $smarty->assign ( 'login','系统登录' );
    $smarty->display( 'login.html' );
  }

}
