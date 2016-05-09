<div class="progress">
  <div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 25%">
      <span>门店提交送修</span>
      <span class='b_time'>送修时间：<?=$data->start_date?></span>
      <span class='b_user'>处理人员：<?=$data->from_s?></span>
    </div>
    <?php if(empty($data->s_w_d)):?>
      <div class="progress-bar progress-bar-dim" style="width: 25%">
      <span>正送往售后中心</span>
    <?php else:?>
    <div class="progress-bar progress-bar-success" style="width: 25%">
      <span>总售后处理<?php if(!empty($data->s_w_d) && !empty($data->w_m_d)){echo '(完成)';}?></span>
      <span class='b_time'>仓库接收：<?=$data->s_w_d?></span>
      <span class='b_user'>处理人员：<?=get_nick($data->s_w_u)?></span>
      <?php if(!empty($data->w_m_d)): ?>
      <span class='a_time'>送修厂家：<?=$data->w_m_d?></span>
      <span class='a_user'>处理人员：<?=get_nick($data->w_m_u)?></span>
      <?php endif;?>
    </div>
    <?php
      if(empty($data->m_w_d)):
    ?>
    <div class="progress-bar progress-bar-dim" style="width: 25%">
      <span>厂家处理当中</span>
    <?php else: ?>
    <div class="progress-bar progress-bar-success" style="width: 25%">
      <span>厂家返回总售后<?php if(!empty($data->m_w_d) && !empty($data->w_s_d)){echo '(完成)';}?></span>
      <span class='b_time'>厂家返回：<?=$data->m_w_d?></span>
      <span class='b_user'>处理人员：<?=get_nick($data->m_w_u)?></span>
      <?php if(!empty($data->w_s_d)): ?>
      <span class='a_time'>返回门店：<?=$data->w_s_d?></span>
      <span class='a_user'>处理人员：<?=get_nick($data->w_s_u)?></span>
      <?php endif;?>
    </div>
    <?php
      if(empty($data->receive_d)):
    ?>
      <div class="progress-bar progress-bar-dim" style="width: 25%">
      <span>尚未返回门店</span>
    <?php else: ?>
    <div class="progress-bar progress-bar-success" style="width: 25%">
      <span>总售后返回门店(完成)</span>
      <span class='b_time'>门店接收：<?=$data->receive_d?></span>
      <span class='b_user'>处理人员：<?=$data->from_s?></span>
      <span class='a_time'>客户取机：<?=$data->take_d?></span>
      <span class='a_user'>处理人员：<?=$data->from_s?></span>
    <?php 
      endif;
      endif;
      endif;
    ?>
    </div>
  </div>
</div>
