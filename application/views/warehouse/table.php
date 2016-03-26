<?php $this->load->view('header.php',array('title'=>'我的送修信息')); ?>
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
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							产品
						</th>
						<th>
							交付时间
						</th>
						<th>
							状态
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="success">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="error">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="info">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('footer');?>
