<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

	<!-- Bootstrap -->
  <link href="<?php echo base_url('static/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('static/css/font-awesome.min.css') ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('static/css/style.css') ?>" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="<?php echo base_url('static/js/html5shiv.js') ?>"></script>
    <script src="<?php echo base_url('static/js/respond.min.js') ?>"></script>
    <![endif]-->
</head>
<body>
	<!-- HTML start-->
	<!--side start-->
	<div class="side">
		<div class="logo">创宇数码售后</div>
    <!-- 插入导航 start -->
    <?php $this->load->view($menu_type.'/menu'); ?>
    <!-- 插入导航 end -->
	</div>
	<!--side end -->
	<!--header start-->
	<div class="header clear">
  <span class='page_title'><?php echo $page_title;?></span>

		<div class="dropdown right head-dropdown">
			<a href="javascript:;" class="under-n head-droplink" id="dropdownMenu1" data-toggle="dropdown" >
				<span class="avtar"><img src="<?php echo base_url('static/images/img/avtar.jpg')?>" ></span>
        <?php echo $this->session->userdata('nickname'); ?>
				<i class="fa fa-chevron-down"></i> 
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<span class="fa fa-angle-up"></span>
        <li><a href="../login/loginout">退出系统</a></li>
			</ul>
		</div>

		<div class="dropdown right head-dropdown">
			<a href="javascript:;" class="under-n head-droplink" id="dropdownMenu1" data-toggle="dropdown" >
				<i class="fa fa-bell-o head-ico"><span class="badge">4</span></i> 
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<span class="fa fa-angle-up"></span>
				<li><a href="#">反馈意见</a></li>
			</ul>
		</div>
	</div>
	<!--header end -->
	<!--main start-->
	<div class="main">
  <div class='pad20'>
    <hr>