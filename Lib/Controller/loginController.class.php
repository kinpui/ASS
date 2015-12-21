<?php
class loginController{

  function login(){
    V::assign ( array( 'login_title'=>'login' ) );
    V::display( 'login.html' );
  }

}
