<!--查看详细信息-->
<form class='details'>
    <fieldset>

    <div class='col-md-12 pad10'>
      <!-- text input 购机日期 -->
      <label class="col-sm-1 text-center " for="input01">购机日期</label>
      <div class="col-sm-4">
      <input type="text" class="input-xlarge  form-control" disabled="true" value='<?=$data->buy_date?>'>
      </div>

      <!-- Text input 客户名称-->
      <label class="col-sm-1 text-center " for="input01">客户名称</label>
      <div class="col-sm-4">
      <input type="text" class="input-xlarge  form-control" disabled="true" value='<?=$data->customer_name?>'>
      </div>
    </div>
    
    <div class='col-md-12 pad10'>
      <!-- Text input 客户电话-->
      <label class="col-sm-1 text-center " for="input01">客户电话</label>
      <div class="col-sm-4">
      <input type="text"  class="input-xlarge  form-control"  disabled="true" value='<?=$data->customer_phone?>'>
      </div>

      <!-- Text input 品牌型号-->
      <label class="col-sm-1 text-center " for="input01">品牌型号</label>
      <div class="col-sm-4">
      <input type="text"  class="input-xlarge  form-control" disabled="true" value='<?=$data->brand?>'>
      </div>
    </div>

    <div class='col-md-12 pad10'>
      <!-- Text input 数码串码-->
      <label class="col-sm-1 text-center " for="input01">数码串码</label>
      <div class="col-sm-4">
      <input type="text"  class="input-xlarge  form-control" disabled="true" value='<?=$data->string_code?>'>
      </div>

      <!-- Text input 外观描述-->
      <label class="col-sm-1 text-center " for="input01">外观描述:</label>
      <div class="col-sm-4">
      <input type="text"  class="input-xlarge  form-control" disabled="true" value='<?=$data->appearance?>'>
      </div>
    </div>

    <div class='col-md-12 pad10'>
      <!-- Text input TP & 显示屏 -->
      <label class="col-sm-1 text-center " for="input01">TP/显示屏</label>
      <div class="col-sm-4">
      <input type="text"  class="input-xlarge  form-control" disabled="true" value='<?=$data->screen?>'>
      </div>

      <!-- Select Multiple 附带配件 -->
      <label class="col-sm-1 text-center " for="input01">附带配件</label>
      <div class="col-sm-4">
      <input type="text"  class="input-xlarge  form-control" disabled="true" value='<?=$data->parts?>'>
      </div>
    </div>

    <div class='col-md-12 pad10'>
      <!-- Select Basic 数码类型下拉选择-->
      <label class="col-sm-1 text-center ">数码类型</label>
      <div class="col-sm-4">
      <input class="input-xlarge  form-control" type='text' disabled="true" value='<?=$data->digital_type?>'>
      </div>

      <!-- Select Basic 下拉选择颜色-->
      <label class="col-sm-1 text-center ">颜 色: </label>
      <div class="col-sm-4">
      <input type='text' class="input-xlarge  form-control" disabled="true" value='<?=$data->digital_color?>'>
      </div>
    </div>


    <div class='col-md-12 pad10'>
      <!-- Textarea 故障原因 -->
      <label class="col-sm-1 text-center text-center">故障原因</label>
      <div class="col-sm-4">
        <div class="textarea">
        <textarea class=" form-control" disabled="true"><?=$data->fault?></textarea>
        </div>
      </div>

      <!-- Textarea 备注信息 -->
      <label class="col-sm-1 text-center ">备　　注</label>
      <div class="col-sm-4">
        <div class="textarea">
        <textarea class=" form-control" disabled="true"><?=$data->remarks?></textarea>
        </div>
      </div>
    </div>

    <div class='col-md-12 pad10'>
      <label class="col-sm-1 text-center ">维修类型</label>
      <div class="col-sm-4">
      <input type='text' class="input-xlarge  form-control" disabled="true" value='<?=$data->repair_type?>'>
      </div>
    </div>
    
    <!-- 判断是否存在报价 -->
    <?php if(!empty($data->offer)):?>
      <div class="change-callout col-md-12">
        <div class="panel-heading bg-danger">报价</div>
        <div class="panel-body">
        维修报价:￥<?=$data->offer?>
        <p class='explain'>报价原因: <?=$data->reason?></p>
        </div>
      </div>
    <?php endif;?>

    <!-- 判断是否存在新字符串 -->
    <?php if(!empty($data->new_string)):?>
      <div class="change-callout col-md-12">
        <div class="panel-heading bg-danger">换新串码</div>
        <div class="panel-body">
        新的串码为:<?=$data->new_string?>
        <p class='explain'>换新串原因: <?=$data->new_string_explain?></p>
        </div>
      </div>
    <?php endif;?>
    </fieldset>
    </form>
    <div class='pad20'></div>

<?php $this->load->view('publics/progress')?>
