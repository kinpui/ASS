<?php
class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
		$this->load->helper(array('url','form'));
    $this->load->library('session');
  }

  /**
   *
   * 显示登陆页面
   * 提交表单
   *
   **/
  public function index(){
    $this->load->helper('form');
    $this->load->view('login/index');
  }

  /**
   *
   * 验证登陆信息
   *
   **/
  public function verify()
  {

    $this->load->library('form_validation');
    $this->load->database();/* 初始化数据库连接 */

    /* 获取登陆用户用户名信息 */
    $username = trim($this->input->post('username'));
    $password = trim($this->input->post('password'));

    /*数据库验证*/
    $this->db->where('username',$username);
    $this->user_info = $this->db->get('user')->result_array();

    $this->form_validation->set_rules(
      'username', 
      'Username',
      'callback_username_check'
    );

    $this->form_validation->set_rules(
      'password',
      'Password',
      'callback_password_check'
    );


    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('login/index');
    }else{

      /* session 记录信息 */
      $this->session->set_userdata(array(
        'nickname'  => $this->user_info[0]['nickname'],
        'username'  => $this->user_info[0]['username'],
        'userid'    => $this->user_info[0]['id'],
        'usertype'  => $this->user_info[0]['usertype'],
        'sector'    => $this->user_info[0]['sector']
      ));

      /* 根据 usertype 跳转页面 */
      switch($this->session->userdata('usertype')){
        case '1':  
          /* 总管理员 */
          redirect('admin');
          break;
        case '2':
          /* 总仓管理员 */
          redirect('warehouse');
          break;
        case '3':
          /* 门店管理员 */
          redirect('store');
          break;
        case '4':
          /* 客服人员 */
          redirect('service');
          break;
      }
    }
  }

  /**
   *
   * 退出系统
   * 销毁session
   * 回到登录页面
   *
   **/
  public function loginout(){
    $this->session->unset_userdata(array('nickname','username','userid','usertype'));
    redirect('login');
  }

  /**
   *
   * 验证用户名
   *
   **/
  public function username_check($str)
  {
        if ($str == '')
        {
            $this->form_validation->set_message('username_check', '用户名不能为空');
            return FALSE;
        }
        elseif( $this->user_info == null )
        {
            $this->form_validation->set_message('username_check', '用户不存在');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
  }

  /**
   *
   * 验证密码
   *
   **/
  public function password_check($str)
  {
        $password = isset($this->user_info[0]['password'])?$this->user_info[0]['password']:0;

        /* 验证进过md5 加密以后的密码 */
        if(md5($str) != $password)
        {
            $this->form_validation->set_message('password_check', '密码错误');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
  }


/* end */
}
