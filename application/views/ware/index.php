<div class="pad20">
			<!--postion start-->
			<div class="postion ">
				<div class="pos-link mart20"><a>仓库</a>  &gt;  <a>主页</a></div>
			</div>
			<!--postion end-->
			<!--stats start-->
			<div class="stats-cont row mart20">
				<div class="col-sm-3 ">
					<div class="stats-panel stats-blue clear">
						<div class="auto stats-txt">
							<p>门店送修</p>
              <p class="stats-num"><?=$get_s_num?></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/get_s') ?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-red clear">
						<div class="auto stats-txt">
							<p>待送修厂家</p>
              <p class="stats-num"><?=$post_m_num?></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/post_m')?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-green clear">
						<div class="auto stats-txt">
							<p>接收返回</p>
              <p class="stats-num"><?=$get_m_num?></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/get_m')?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-purple clear">
						<div class="auto stats-txt">
							<p>待返回门店</p>
              <p class="stats-num"><?=$post_s_num?></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/post_s')?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<!--stats end-->
			<!--sales-list start-->
			<div class="sales-list row mart20">
				<div class="col-sm-9">
					<div class="pad20 bgf">
						<div class="tit1 clear">
							<span class="left txt-left txt-blue"><i class="ico i-rank"></i>区域统计</span>
						</div>
						<div class="tab">
							<!-- Nav tabs -->
							<ul role="tablist" class="nav nav-tabs sale-tabs">
								<li class="active"><a data-toggle="tab" role="tab" href="#tab1">陈江一区</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab2">陈江二区</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab3">惠州区域</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab4">惠阳区域</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab5">博罗区域</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div id="tab1" class="tab-pane active" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
                      <tbody>
                      <tr>
												<td width="30%">门店名称</td>
												<td width="15%">送修量</td>
												<td width="15%">返回量</td>
												<td width="20%">未取机</td>
											</tr>
<?php foreach($chenjiang1 as $val):?>
                      <tr>
                        <td><?=$val['from_s']?></td>
                        <td><?=$val['total']?></td>
                        <td><?=$val['surplus']?></td>
                        <td><?=$val['nottake']?></td>
											</tr>
<?php endforeach; ?>
										</tbody></table>
									</div>
								</div>
								<!--tab2-->
								<div id="tab2" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tbody>
                      <tr>
												<td width="30%">门店名称</td>
												<td width="15%">送修量</td>
												<td width="15%">返回量</td>
												<td width="20%">未取机</td>
											</tr>
<?php foreach($chenjiang2 as $val):?>
                      <tr>
                        <td><?=$val['from_s']?></a></td>
                        <td><?=$val['total']?></td>
                        <td><?=$val['surplus']?></td>
                        <td><?=$val['nottake']?></td>
											</tr>
<?php endforeach; ?>
										</tbody></table>
									</div>
								</div>
								<!--tab3-->
								<div id="tab3" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
                      <tbody>
                      <tr>
												<td width="30%">门店名称</td>
												<td width="15%">送修量</td>
												<td width="15%">返回量</td>
												<td width="20%">未取机</td>
											</tr>
<?php foreach($huizhou as $val):?>
                      <tr>
                        <td><?=$val['from_s']?></td>
                        <td><?=$val['total']?></td>
                        <td><?=$val['surplus']?></td>
                        <td><?=$val['nottake']?></td>
											</tr>
<?php endforeach; ?>
										</tbody></table>
									</div>
								</div>
								<!--tab4-->
								<div id="tab4" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
                      <tbody>
                      <tr>
												<td width="30%">门店名称</td>
												<td width="15%">送修量</td>
												<td width="15%">返回量</td>
												<td width="20%">未取机</td>
											</tr>
<?php foreach($huiyang as $val):?>
                      <tr>
                        <td><?=$val['from_s']?></td>
                        <td><?=$val['total']?></td>
                        <td><?=$val['surplus']?></td>
                        <td><?=$val['nottake']?></td>
											</tr>
<?php endforeach; ?>
										</tbody></table>
									</div>
								</div>
								<!--tab5-->
								<div id="tab5" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
                      <tbody>
                      <tr>
												<td width="30%">门店名称</td>
												<td width="15%">送修量</td>
												<td width="15%">返回量</td>
												<td width="20%">未取机</td>
											</tr>
<?php foreach($boluo as $val):?>
                      <tr>
                        <td><?=$val['from_s']?></td>
                        <td><?=$val['total']?></td>
                        <td><?=$val['surplus']?></td>
                        <td><?=$val['nottake']?></td>
											</tr>
<?php endforeach; ?>
										</tbody></table>
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
                    <p class="report-txt2"><span class="fz22">送修<?=$day_total?></span> <br>返回<?=$day_re?></p>
                    <p class="report-txt3"><?=$day?></p>
									</a>
								</li>
								<li class="bg-red">
									<a href="#">
										<p class="report-txt1">本月</p>
                    <p class="report-txt2"><span class="fz22">送修<?=$mon_total?></span> <br>返回<?=$mon_re?></p>
                    <p class="report-txt3"><?=$mon?>月</p>
									</a>
								</li>
								<li class="bg-blue">
									<a href="#">
										<p class="report-txt1">今年</p>
                    <p class="report-txt2"><span class="fz22">送修<?=$year_total?></span> <br>返回<?=$year_re?></p>
                    <p class="report-txt3"><?=$year?>年</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--sales-list end-->



		</div>
