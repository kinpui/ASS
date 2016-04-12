<!-- 筛选start -->
<?php echo form_open($action,array('class'=>'selection-form')); ?>
<div class='selection'>
<!-- 数码类型划分start -->
<div class='btn-group' role="group" >
<select class="form-control" name='digital_type'>
  <option value=''>数码类型</option>
  <?php foreach($digital_type as $d_type): ?>
  <option value='<?=$d_type['id']?>'><?=$d_type['value']?></option>
  <?php endforeach; ?>
</select>
</div>
<!-- 数码类型划分end -->

<!-- 状态信息划分start -->
<div class='btn-group' role="group" >
<select class="form-control" name='state'>
  <option>当前送修状态</option>
<?php foreach($state as $status):?>
<option value='<?=$status['state_code']?>'><?=$status['state_msg']?></option>
<?php endforeach; ?>
</select>

</div>
<!-- 状态信息划分end -->

<!--区域划分start-->
<div class='btn-group' role="group" >
  <select class="form-control col-md-12" name='region'>
  <option>区域划分</option>
<?php foreach($region as $val):?>
<option value='<?=$val['id']?>'><?=$val['region']?></option>
<?php endforeach; ?>
</select>

</div>
<!--区域划分end-->

<?php if(empty($no_date)):?>
<!-- 时间段搜索start -->
    <!--开始--> 
<div class='btn-group' role="group" >
   <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy MM dd" data-link-field="start_time" data-link-format="yyyy-mm-dd">
        <input class="form-control" size="16" type="text" value="" placeholder='开始时间' readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
    </div>
    <input type="hidden" id="start_time" name='start_time' value="" />
</div>
<div class='btn-group' role="group" >
    <!--结束-->
    <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy MM dd" data-link-field="end_time" data-link-format="yyyy-mm-dd">
      <input class="form-control" size="16" type="text" value='' placeholder="截止日期" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
    </div>
    <input type="hidden" id="end_time" name='end_time' value="" />
</div>
<!-- 时间段搜索end -->
<?php endif;?>

<!-- 关键词搜索start -->
<div class='btn-group' role='group'>
<input class='col-md-12 form-control' type='text' placeholder='搜索关键字' name='key'>
</div>
<!-- 关键词搜索end -->


<!--提交按钮 start-->
<div class='btn-group' role='group'>
  <input class='col-md-12 form-control btn btn-success dropdown-toggle' type='submit' value='查询'>
</div>
<!--提交按钮end-->

</form>
</div>
