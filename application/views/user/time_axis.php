<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>演示：HTML5+CSS3实现的响应式垂直时间轴</title>
<link rel="stylesheet" href="<?php echo base_url('static/css/time_axis.css')?>" />
</head>

<body>
<?php
if($result):
  foreach($result as $values):
?>
<p class='text-center'>您的<?=$values->brand?>维修进度</p>
<section id="cd-timeline" class="cd-container">
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
		</div>

		<div class="cd-timeline-content">
			<h2>您送修到门店</h2>
      <span class="cd-date">时间:<?=$values->start_date?></span>
      <span class="cd-date">操作:<?=$values->from_s?></span>
		</div>
	</div>
	<div class="cd-timeline-block">
  <div class="cd-timeline-img <?php echo empty($values->s_w_d)?'cd-movie':'cd-picture'; ?>">
		</div>

		<div class="cd-timeline-content">
			<h2>门店送到售后服务中心</h2>
      <span class="cd-date">时间：<?=$values->s_w_d?></span>
      <span class="cd-date">操作：<?=get_nick($values->s_w_u)?></span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img <?php echo empty($values->w_m_d)?'cd-movie':'cd-picture'; ?>">
		</div>

		<div class="cd-timeline-content">
			<h2>服务中心送到厂家</h2>
      <!-- 查看是否有报价 换串码  -->
      <?php
        if(empty($values->new_string)):
      ?>
        <!-- 有新串码 -->
        <p>换了新串码:<span><?=$values->new_string?></span></p>
        <p>换串码原因:<span><?=$values->new_string_explain?></span></p>

      <span class="cd-date">时间：<?=$values->w_m_d?></span>
      <span class="cd-date">操作：<?=get_nick($values->w_m_u)?></span>
      <?php endif;?>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img <?php echo empty($values->m_w_d)?'cd-movie':'cd-picture'; ?>">
		</div>

		<div class="cd-timeline-content">
			<h2>厂家返回到服务中心</h2>
      <span class="cd-date">时间：<?=$values->m_w_d?></span>
      <span class="cd-date">操作：<?=get_nick($values->m_w_u)?></span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img <?php echo empty($values->w_s_d)?'cd-movie':'cd-picture'; ?>">
		</div>

		<div class="cd-timeline-content">
			<h2>服务中心返回到门店</h2>
      <span class="cd-date">时间：<?=$values->w_s_d?></span>
      <span class="cd-date">操作：<?=get_nick($values->w_s_u)?></span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img <?php echo empty($values->receive_d)?'cd-movie':'cd-picture'; ?>">
		</div>

		<div class="cd-timeline-content">
			<h2>到达门店</h2>
      <span class="cd-date">时间：<?=$values->receive_d?></span>
      <span class="cd-date">操作：<?php echo empty($values->receive_d)?'':$values->from_s?></span>
		</div>
	</div>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img <?php echo empty($values->take_d)?'cd-movie':'cd-picture'; ?>">
		</div>
		<div class="cd-timeline-content">
			<h2>送回您手中</h2>
      <span class="cd-date">时间：<?=$values->take_d?></span>
		</div>
	</div>
</section>
<?php
  endforeach;
  endif;
?>
