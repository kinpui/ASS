<?php $this->load->view('header.php',array('title'=>'欢迎'.$nickname.'售后员')); ?>
<body>
	<!-- HTML start-->
	<!--side start-->
	<div class="side">
		<div class="logo">创宇数码售后</div>
    <!-- 插入导航 start -->
    <?php $this->load->view('warehouse/menu'); ?>
    <!-- 插入导航 end -->
  </div>
	<!--side end -->
	<!--header start-->
	<div class="header clear">
		<div class="date-cont1 left">
			<span class="time">17:36</span>
			<p class="date">2015-09-02</p>
		</div>

		<div class="dropdown right head-dropdown">
			<a href="javascript:;" class="under-n head-droplink" id="dropdownMenu1" data-toggle="dropdown" >
				<span class="avtar"><img src="<?php echo base_url('static/images/img/avtar.jpg')?>" ></span>
        <?php echo $nickname; ?>
				<i class="fa fa-chevron-down"></i> 
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<span class="fa fa-angle-up"></span>
				<li><a href="login/loginout">退出系统</a></li>
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
		<div class="pad20">
			<!--postion start-->
			<div class="postion ">
				<div class="pos-txt"><span class="fz24 padr5">当前位置</span></div>
        <div class="pos-link mart20"><?php echo $nickname; ?>售后专员的送修记录</div>
			</div>
			<!--postion end-->
<?php $this->load->view('footer');?>
