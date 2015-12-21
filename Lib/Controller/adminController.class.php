<?php

class adminController{

  //定义了用户认证信息
  public $auth;

  /**
   *
   * 构造函数
   *
   * 判断用户认证信息是否存在
   *
   * 不存在且当前方法不是login
   *    跳转到登录页面
   * 否认
   *    赋值用户认证信息auth
   *
   **/


  public function __construct(){

    //开启session
    session_start();

    if( !( isset( $_SESSION['auth'] ) ) && ass::$method != 'login' ){
      //提示登录
      $this->msg( '请登录~~','index.php?c=admin&m=login' );
    }else{
      //已登录
      //判断session 如果为空则设置为空数组
      $this->auth = isset( $_SESSION['auth'] )?$_SESSION['auth']:array();
    }
    
  }

  /**
   *
   * 登录模块
   * 
   * if用户点击了提交按钮
   *    则进行登录信息校验
   * else
   *    显示登录页面
   *
   *
   **/
  public function login(){
    if( isset( $_POST['submit'] ) ){
      $this->checklogin();
    }else{
      V::display( 'admin/login.html' );
    }
  }



  /**
   *
   * 信息tips
   * @param   $tips_text  string   提示信息文本
   * @param   $redirect   string   重定向连接
   *
   **/

  public function msg( $tips_text,$redirect ){
    echo "<script>alert('$tips');window.location.href='$redirect'</script>";
    exit;
  }

}

