<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录售后系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('static/login/css/reset.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('static/login/css/supersized.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('static/login/css/style.css'); ?>">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录(Login)</h1>
            <?php echo validation_errors(); ?>
            <?php echo form_open('login/verify'); ?>
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
		
        <!-- Javascript -->
        <script src="<?php echo base_url('static/login/js/jquery-1.8.2.min.js') ?>" ></script>
        <script src="<?php echo base_url('static/login/js/scripts.js') ?>" ></script>
    </body>

</html>

