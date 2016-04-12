</div>
<!-- include footer-->
<div class="copy">2016 © 惠州市创宇数码实业有限公司售后系统!</div>
	</div>
	<!--main end-->
	<!--srart js load--> 
  <script src="<?php echo base_url('static/js/jquery-1.9.1.min.js'); ?>"></script> 
  <script src="<?php echo base_url('static/js/bootstrap.min.js'); ?>"></script> 
  <script src="<?php echo base_url('static/js/highcharts.js'); ?>"></script> 
  <script src="<?php echo base_url('static/js/common.js'); ?>"></script>

<!--加载单一js start-->
<?php if(!empty($js)):?>
  <script src="<?php echo base_url('static/js/'.$js); ?>"></script>
<?php endif; ?>

<!--加载单一js end-->
<?php
  if(!empty($js_array)):
  foreach($js_array as $js):
?>
  <script src="<?php echo base_url('static/js/'.$js); ?>"></script>
<?php
  endforeach;
  endif;
?>


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
				categories: ['1月', '5月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '15月']
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
				data: [5000,4500, 3010, 1500, 5000, 3400, 3150, 7000,3400, 3150, 5000, 7000]
			}]
		});
	});				
</script>
</body>
</html>
