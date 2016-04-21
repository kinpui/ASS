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
              <p class="stats-num"><a href="#"><?=$get_s_num?></a></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/get_s') ?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-red clear">
						<div class="auto stats-txt">
							<p>待送修厂家</p>
              <p class="stats-num"><a href="#"><?=$post_m_num?></a></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/post_m')?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-green clear">
						<div class="auto stats-txt">
							<p>接收返回</p>
              <p class="stats-num"><a href="#"><?=$get_m_num?></a></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/get_m')?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-sm-3 ">
					<div class="stats-panel stats-purple clear">
						<div class="auto stats-txt">
							<p>待返回门店</p>
              <p class="stats-num"><a href="#"><?=$post_s_num?></a></p>
						</div>
            <a class="more clear" href="<?=base_url('index.php/ware/post_s')?>"><span class="left">处理</span> <i class="right fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<!--stats end-->
			<!--chart start-->
			<div class="chart mart20">
				<div class="tit1 clear">
					<span class="left txt-left txt-red"><i class="fa fa-share-alt"></i>业绩分析</span>
					<div class="right chart-tit-date">
						<a class="active" href="#">月</a>
						<a href="#">年</a>
					</div>
				</div>

				<div class="padt10">
					<div class="chart-tag"><a class="active" href="#">订单金额</a><a href="#">订单毛利</a></div>
					<div class="chart-box padt10">
						<div class="chart-container" id="chart-container" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 1143px; height: 260px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1143" height="260"><desc>Created with Highcharts 4.1.8</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="1050" height="194"/></clipPath></defs><rect x="0" y="0" width="1143" height="260" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"/><g class="highcharts-grid" zIndex="1"/><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 83 204.5 L 1133 204.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"/><path fill="none" d="M 83 139.5 L 1133 139.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"/><path fill="none" d="M 83 75.5 L 1133 75.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"/><path fill="none" d="M 83 9.5 L 1133 9.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"/></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 170.5 204 L 170.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 257.5 204 L 257.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 345.5 204 L 345.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 432.5 204 L 432.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 520.5 204 L 520.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 607.5 204 L 607.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 695.5 204 L 695.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 782.5 204 L 782.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 870.5 204 L 870.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 957.5 204 L 957.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 1045.5 204 L 1045.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 1133.5 204 L 1133.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 82.5 204 L 82.5 214" stroke="#C0D0E0" stroke-width="1" opacity="1"/><path fill="none" d="M 83 204.5 L 1133 204.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"/></g><g class="highcharts-axis" zIndex="2"><text x="30.200000762939453" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 30.200000762939453 107)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" visibility="visible" y="107">Y-Axis</text></g><g class="highcharts-series-group" zIndex="3"><path fill="rgba(124,181,236,0.25)" d="M 0 0"/><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(83,10) scale(1 1)" clip-path="url(#highcharts-1)"><path fill="rgba(124,181,236,0.5)" d="M 43.75 142.26666666666665 L 131.25 85.36 L 218.75 116.14133333333334 L 306.25 162.96 L 393.75 64.66666666666666 L 481.25 106.05333333333334 L 568.75 113.296 L 656.25 12.933333333333337 L 743.75 106.05333333333334 L 831.25 113.296 L 918.75 142.26666666666665 L 1006.25 12.933333333333337 L 1006.25 194 L 43.75 194" zIndex="0"/><path fill="none" d="M 43.75 142.26666666666665 L 131.25 85.36 L 218.75 116.14133333333334 L 306.25 162.96 L 393.75 64.66666666666666 L 481.25 106.05333333333334 L 568.75 113.296 L 656.25 12.933333333333337 L 743.75 106.05333333333334 L 831.25 113.296 L 918.75 142.26666666666665 L 1006.25 12.933333333333337" stroke="#7cb5ec" stroke-width="2" zIndex="1" stroke-linejoin="round" stroke-linecap="round"/><path fill="none" d="M 33.75 142.26666666666665 L 43.75 142.26666666666665 L 131.25 85.36 L 218.75 116.14133333333334 L 306.25 162.96 L 393.75 64.66666666666666 L 481.25 106.05333333333334 L 568.75 113.296 L 656.25 12.933333333333337 L 743.75 106.05333333333334 L 831.25 113.296 L 918.75 142.26666666666665 L 1006.25 12.933333333333337 L 1016.25 12.933333333333337" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""/></g><g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(83,10) scale(1 1)" clip-path="url(#highcharts-2)" style=""><path fill="#7cb5ec" d="M 1006 8.933333333333337 C 1011.328 8.933333333333337 1011.328 16.933333333333337 1006 16.933333333333337 C 1000.672 16.933333333333337 1000.672 8.933333333333337 1006 8.933333333333337 Z"/><path fill="#7cb5ec" d="M 918 138.26666666666665 C 923.328 138.26666666666665 923.328 146.26666666666665 918 146.26666666666665 C 912.672 146.26666666666665 912.672 138.26666666666665 918 138.26666666666665 Z"/><path fill="#7cb5ec" d="M 831 109.296 C 836.328 109.296 836.328 117.296 831 117.296 C 825.672 117.296 825.672 109.296 831 109.296 Z"/><path fill="#7cb5ec" d="M 743 102.05333333333334 C 748.328 102.05333333333334 748.328 110.05333333333334 743 110.05333333333334 C 737.672 110.05333333333334 737.672 102.05333333333334 743 102.05333333333334 Z"/><path fill="#7cb5ec" d="M 656 8.933333333333337 C 661.328 8.933333333333337 661.328 16.933333333333337 656 16.933333333333337 C 650.672 16.933333333333337 650.672 8.933333333333337 656 8.933333333333337 Z"/><path fill="#7cb5ec" d="M 568.75 109.296 C 574.078 109.296 574.078 117.296 568.75 117.296 C 563.422 117.296 563.422 109.296 568.75 109.296 Z" stroke-width="1"/><path fill="#7cb5ec" d="M 481.25 102.05333333333334 C 486.578 102.05333333333334 486.578 110.05333333333334 481.25 110.05333333333334 C 475.922 110.05333333333334 475.922 102.05333333333334 481.25 102.05333333333334 Z" stroke-width="1"/><path fill="#7cb5ec" d="M 393 60.66666666666666 C 398.328 60.66666666666666 398.328 68.66666666666666 393 68.66666666666666 C 387.672 68.66666666666666 387.672 60.66666666666666 393 60.66666666666666 Z"/><path fill="#7cb5ec" d="M 306 158.96 C 311.328 158.96 311.328 166.96 306 166.96 C 300.672 166.96 300.672 158.96 306 158.96 Z"/><path fill="#7cb5ec" d="M 218 112.14133333333334 C 223.328 112.14133333333334 223.328 120.14133333333334 218 120.14133333333334 C 212.672 120.14133333333334 212.672 112.14133333333334 218 112.14133333333334 Z"/><path fill="#7cb5ec" d="M 131 81.36 C 136.328 81.36 136.328 89.36 131 89.36 C 125.672 89.36 125.672 81.36 131 81.36 Z"/><path fill="#7cb5ec" d="M 43 138.26666666666665 C 48.328 138.26666666666665 48.328 146.26666666666665 43 146.26666666666665 C 37.672 146.26666666666665 37.672 138.26666666666665 43 138.26666666666665 Z"/></g></g><g class="highcharts-legend" zIndex="7" transform="translate(160,110)"><rect x="0.5" y="0.5" width="62" height="30" strokeWidth="1" stroke="#909090" stroke-width="1" fill="#FFFFFF" visibility="visible"/><g zIndex="1"><g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)"><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="15">John</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#7cb5ec"/></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="126.75" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">1月</text><text x="214.25" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">2月</text><text x="301.75" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">3月</text><text x="389.25" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">4月</text><text x="476.75" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">5月</text><text x="564.25" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">6月</text><text x="651.75" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">7月</text><text x="739.25" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">8月</text><text x="826.75" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">9月</text><text x="914.25" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">10月</text><text x="1001.75" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">11月</text><text x="1089.25" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:84px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="223" opacity="1">12月</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="68" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:367px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="206" opacity="1">0</text><text x="68" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:367px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="141" opacity="1">2500</text><text x="68" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:367px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="77" opacity="1">5000</text><text x="68" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:367px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="12" opacity="1">7500</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(615,-9999)" opacity="0" visibility="visible"><path fill="none" d="M 3.5 0.5 L 71.5 0.5 C 74.5 0.5 74.5 0.5 74.5 3.5 L 74.5 48.5 C 74.5 51.5 74.5 51.5 71.5 51.5 L 42.5 51.5 36.5 57.5 30.5 51.5 3.5 51.5 C 0.5 51.5 0.5 51.5 0.5 48.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="74" height="51"/><path fill="none" d="M 3.5 0.5 L 71.5 0.5 C 74.5 0.5 74.5 0.5 74.5 3.5 L 74.5 48.5 C 74.5 51.5 74.5 51.5 71.5 51.5 L 42.5 51.5 36.5 57.5 30.5 51.5 3.5 51.5 C 0.5 51.5 0.5 51.5 0.5 48.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="74" height="51"/><path fill="none" d="M 3.5 0.5 L 71.5 0.5 C 74.5 0.5 74.5 0.5 74.5 3.5 L 74.5 48.5 C 74.5 51.5 74.5 51.5 71.5 51.5 L 42.5 51.5 36.5 57.5 30.5 51.5 3.5 51.5 C 0.5 51.5 0.5 51.5 0.5 48.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="74" height="51"/><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 71.5 0.5 C 74.5 0.5 74.5 0.5 74.5 3.5 L 74.5 48.5 C 74.5 51.5 74.5 51.5 71.5 51.5 L 42.5 51.5 36.5 57.5 30.5 51.5 3.5 51.5 C 0.5 51.5 0.5 51.5 0.5 48.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#7cb5ec" stroke-width="1"/><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="20"><tspan style="font-weight:bold">John</tspan><tspan x="8" dy="15">7月: 3120</tspan></text></g></svg></div></div>
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
							<ul role="tablist" class="nav nav-tabs sale-tabs">
								<li class="active"><a data-toggle="tab" role="tab" href="#tab1">产品销售</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab2">客户购买</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab3">地区购买</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab4">供应商商品</a></li>
								<li><a data-toggle="tab" role="tab" href="#tab5">业务员</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div id="tab1" class="tab-pane active" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tbody><tr>
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
											<tr>
												<td><span>Top4</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top5</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top6</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top7</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top8</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top9</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top10</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</tbody></table>
									</div>
								</div>
								<!--tab2-->
								<div id="tab2" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tbody><tr>
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
											<tr>
												<td><span class="txt-red">Top2</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span class="txt-red">Top3</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top4</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top5</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top6</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top7</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top8</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top9</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top10</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</tbody></table>
									</div>
								</div>
								<!--tab3-->
								<div id="tab3" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tbody><tr>
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
												<td><span class="txt-red">Top2</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span class="txt-red">Top3</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top4</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top5</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top6</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top7</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top8</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top9</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top10</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</tbody></table>
									</div>
								</div>
								<!--tab4-->
								<div id="tab4" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tbody><tr>
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
											<tr>
												<td><span>Top4</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top5</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top6</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top7</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top8</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top9</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top10</span></td>
												<td><a href="#">2015新款男装</a></td>
												<td>150.00</td>
												<td>3000</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
										</tbody></table>
									</div>
								</div>
								<!--tab5-->
								<div id="tab5" class="tab-pane" role="tabpanel">
									<div class="table-responsive mart20 sale-table">
										<table class="table table-bordered table-striped">
											<tbody><tr>
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
												<td><span class="txt-red">Top2</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span class="txt-red">Top3</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top4</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top5</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top6</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top7</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top8</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top9</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
											<tr>
												<td><span>Top10</span></td>
												<td>李秋燕</td>
												<td>45000，000</td>
												<td><a href="#">查看详情</a></td>
											</tr>
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
