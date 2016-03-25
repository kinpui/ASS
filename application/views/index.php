<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		<div class="logo">订货汇</div>
		<div class="sidemenu">
			<ul>
				<li>
					<a href="#">
						<i class="ico i-nav1"></i>
						<p>客户</p>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="ico i-nav2"></i>
						<p>销售单</p>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="ico i-nav3"></i>
						<p>商家</p>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="ico i-nav4"></i>
						<p>采购单</p>
					</a>
				</li>
			</ul>
		</div>
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
				Nick 
				<i class="fa fa-chevron-down"></i> 
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<span class="fa fa-angle-up"></span>
				<li class="line"><a href="#">账号管理</a></li>
				<li><a href="#">反馈意见</a></li>
				<li><a href="#">退出系统</a></li>
			</ul>
		</div>

		<div class="dropdown right head-dropdown">
			<a href="javascript:;" class="under-n head-droplink" id="dropdownMenu1" data-toggle="dropdown" >
				<i class="fa fa-bell-o head-ico"><span class="badge">4</span></i> 
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<span class="fa fa-angle-up"></span>
				<li class="line"><a href="#">账号管理</a></li>
				<li><a href="#">反馈意见</a></li>
				<li><a href="#">退出系统</a></li>
			</ul>
		</div>
	</div>
	<!--header end -->
	<!--main start-->
	<div class="main">
		<div class="pad20">
			<!--postion start-->
			<div class="postion ">
				<div class="pos-txt"><span class="fz24 padr5">当前位置</span>Current position</div>
				<div class="pos-link mart20"><a href="/">首页</a>  >  <a href="#">账单</a></div>
			</div>
			<!--postion end-->
			<!--stats start-->
			<div class="stats-cont row mart20">
				<div class="col-sm-3 ">
					<div class="stats-panel stats-blue clear">
            <div class="left"><img src="<?php echo base_url('static/images/stats1.png')?>" height="104" width="83" alt=""></div>
						<div class="auto stats-txt">
							<p>待处理订单</p>
							<p class="stats-num"><a href="#">2608</a></p>
						</div>
						<a href="#" class="more clear"><span class="left">More</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-red clear">
            <div class="left"><img src="<?php echo base_url('static/images/stats2.png')?>" height="104" width="83" alt=""></div>
						<div class="auto stats-txt">
							<p>待回复消息</p>
							<p class="stats-num"><a href="#">2608</a></p>
						</div>
						<a href="#" class="more clear"><span class="left">More</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-green clear">
						<div class="left"><img src="<?php echo base_url('static/images/stats3.png')?>" height="104" width="83" alt=""></div>
						<div class="auto stats-txt">
							<p>待补充商品</p>
							<p class="stats-num"><a href="#">2608</a></p>
						</div>
						<a href="#" class="more clear"><span class="left">More</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-purple clear">
            <div class="left"><img src="<?php echo base_url('static/images/stats4.png')?>" height="104" width="83" alt=""></div>
						<div class="auto stats-txt">
							<p>待处理订单</p>
							<p class="stats-num"><a href="#">2608</a></p>
						</div>
						<a href="#" class="more clear"><span class="left">More</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<!--stats end-->
			<!--chart start-->
			<div class="chart mart20">
				<div class="tit1 clear">
					<span class="left txt-left txt-red"><i class="fa fa-share-alt"></i>业绩分析</span>
					<div class="right chart-tit-date">
						<a href="#" class="active">月</a>
						<a href="#">年</a>
					</div>
				</div>

				<div class="padt10">
					<div class="chart-tag"><a href="#" class="active">订单金额</a><a href="#">订单毛利</a></div>
					<div class="chart-box padt10">
						<div id="chart-container" class="chart-container"></div>
					</div>
				</div>
			</div>
			<!--chart end-->
			<!--sales-list start-->
			<div class="sales-list row mart20">
				<div class="col-sm-9">
					<div class="pad20 bgf">
						<div class="tit1 clear">
							<span class="left txt-left txt-blue"><i class="ico i-rank"></i>销售榜单</span>
							<div class="right ">
								<a href="#">今日排行 <i class="fa fa-angle-down"></i></a>
							</div>
						</div>
						<div class="tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs sale-tabs" role="tablist">
								<li class="active"><a href="#tab1"  role="tab" data-toggle="tab">产品销售</a></li>
								<li><a href="#tab2"  role="tab" data-toggle="tab">客户购买</a></li>
								<li><a href="#tab3"  role="tab" data-toggle="tab">地区购买</a></li>
								<li><a href="#tab4"  role="tab" data-toggle="tab">供应商商品</a></li>
								<li><a href="#tab5"  role="tab" data-toggle="tab">业务员</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="tab1">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tr>
												<td width="10%">排名</td>
												<td width="30%">商品名称</td>
												<td width="15%">单价</td>
												<td width="15%">数量</td>
												<td width="20%">销售额</td>
												<td>操作</td>
											</tr>
											<tr>
												<td><span class="txt-red">Top1</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span class="txt-red">Top2</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span class="txt-red">Top3</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</table>
									</div>
								</div>
								<!--tab2-->
								<div role="tabpanel" class="tab-pane" id="tab2">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tr>
												<td width="10%">排名</td>
												<td width="30%">客户名称</td>
												<td width="25%">订单数量</td>
												<td width="25%">销售额</td>
												<td>操作</td>
											</tr>
											<tr>
												<td><span class="txt-red">Top1</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										
										</table>
									</div>
								</div>
								<!--tab3-->
								<div role="tabpanel" class="tab-pane" id="tab3">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tr>
												<td width="10%">排名</td>
												<td width="30%">地区名称</td>
												<td width="25%">订单数量</td>
												<td width="25%">销售额</td>
												<td>操作</td>
											</tr>
											<tr>
												<td><span class="txt-red">Top1</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span >Top10</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</table>
									</div>
								</div>
								<!--tab4-->
								<div role="tabpanel" class="tab-pane" id="tab4">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tr>
												<td width="10%">排名</td>
												<td width="30%">供应商名称</td>
												<td width="15%">类别</td>
												<td width="15%">销量</td>
												<td width="20%">销售额</td>
												<td>操作</td>
											</tr>
											<tr>
												<td><span class="txt-red">Top1</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										
											<tr>
												<td><span >Top10</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</table>
									</div>
								</div>
								<!--tab5-->
								<div role="tabpanel" class="tab-pane" id="tab5">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tr>
												<td width="10%">排名</td>
												<td width="50%">业务员名称</td>
												<td width="30%">销售额</td>
												<td>操作</td>
											</tr>
											<tr>
												<td><span class="txt-red">Top1</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										
											<tr>
												<td><span >Top9</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span >Top10</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</table>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="pad20 bgf">
						<div class="tit1 clear">
							<span class="left txt-left txt-blue"><i class="ico i-rank"></i>今日简报</span>
						</div>
						<div class="report-list ">
							<ul>
								<li class="bg-green">
									<a href="#">
										<p class="report-txt1">今日</p>
										<p class="report-txt2"><span class="fz22">￥18770.00</span> <br>20笔</p>
										<p class="report-txt3">2015-9-02</p>
									</a>
								</li>
								<li class="bg-red">
									<a href="#">
										<p class="report-txt1">本月</p>
										<p class="report-txt2"><span class="fz22">￥18770.00</span> <br>20笔</p>
										<p class="report-txt3">2015-9-02</p>
									</a>
								</li>
								<li class="bg-blue">
									<a href="#">
										<p class="report-txt1">今年</p>
										<p class="report-txt2"><span class="fz22">￥18770.00</span> <br>20笔</p>
										<p class="report-txt3">2015-9-02</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--sales-list end-->

		</div>
		<div class="copy">2014 © Metronic by keenthemes. Purchase Metronic!</div>
	</div>
	<!--main end-->
	<!--end js load--> 
  <script src="<?php echo base_url('static/js/jquery-1.9.1.min.js'?>"></script> 
  <script src="<?php echo base_url('static/js/bootstrap.min.js'?>"></script> 
  <script src="<?php echo base_url('static/js/highcharts.js'?>"></script> 
  <script src="<?php echo base_url('static/js/common.js'?>"></script>
	<script type="text/javascript">
	$(function () {
		$('#chart-container').highcharts({
			chart: {
				type: 'area',
				spacingBottom: 30
			},
			title: {
				text: ''
			},
			subtitle: {
				text: '',
				floating: true,
				align: 'right',
				verticalAlign: 'bottom',
				y: 15
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				verticalAlign: 'top',
				x: 150,
				y: 100,
				floating: true,
				borderWidth: 1,
				backgroundColor: '#FFFFFF'
			},
			xAxis: {
				categories: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
			},
			yAxis: {
				title: {
					text: 'Y-Axis'
				},
				labels: {
					formatter: function() {
						return this.value;
					}
				}
			},
			tooltip: {
				formatter: function() {
					return '<b>'+ this.series.name +'</b><br/>'+
					this.x +': '+ this.y;
				}
			},
			plotOptions: {
				area: {
					fillOpacity: 0.5
				}
			},
			credits: {
				enabled: false
			},
			series: [{
				name: 'John',
				data: [2000,4200, 3010, 1200, 5000, 3400, 3120, 7000,3400, 3120, 2000, 7000]
			}]
		});
	});				
</script>
</body>
</html>