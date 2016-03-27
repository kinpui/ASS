<!-- 生成form -->
<?php echo form_open('store/submit_form',array('class'=>'form-horizontal')); ?>
    <fieldset>

    <div class="form-group">
      <!-- text input 购机日期 -->
      <label class="col-sm-1 control-label" for="input01">购机日期</label>
      <div class="col-sm-4">
        <input type="text" placeholder="日期格式：年-月-日(xxxx-xx-xx)" class="input-xlarge  form-control" name=' buy_date' required>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 客户名称-->
      <label class="col-sm-1 control-label" for="input01">客户名称</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入客户名称" class="input-xlarge  form-control" name='customer_name' required>
      </div>
    </div>
    
    <div class="form-group">
      <!-- Text input 客户电话-->
      <label class="col-sm-1 control-label" for="input01">客户电话</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入客户联系电话" class="input-xlarge  form-control" name="customer_phone" required>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 品牌型号-->
      <label class="col-sm-1 control-label" for="input01">品牌型号</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入数码的品牌和型号" class="input-xlarge  form-control" name='brand' required>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 数码串码-->
      <label class="col-sm-1 control-label" for="input01">数码串码</label>
      <div class="col-sm-4">
        <input type="number" placeholder="输入数码产品全串码" class="input-xlarge  form-control" name='string_code' required>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 外观描述-->
      <label class="col-sm-1 control-label" for="input01">外观描述:</label>
      <div class="col-sm-4">
        <input type="text" placeholder="划痕及损坏情况" class="input-xlarge  form-control" name='appearance'>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input TP & 显示屏 -->
      <label class="col-sm-1 control-label" for="input01">TP/显示屏</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入TP/显示屏" class="input-xlarge  form-control" name='screen'>
      </div>
    </div>

    <div class="form-group">
      <!-- Select Multiple 附带配件 -->
      <label class="col-sm-1 control-label" for="input01">附带配件</label>
      <div class="col-sm-4">
        <input type="text" placeholder="使用 , 区分多个配件 (如：电池,数据线,保卡)" class="input-xlarge  form-control" name='parts'>
      </div>
    </div>

    <div class="form-group">
      <!-- Select Basic 数码类型下拉选择-->
      <label class="col-sm-1 control-label">数码类型</label>
      <div class="col-sm-4">
        <select class="input-xlarge  form-control" name='digital_type'>
          <option>手机</option>
          <option>电脑</option>
          <option>数码</option>
          <option>配件</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <!-- Select Basic 下拉选择颜色-->
      <label class="col-sm-1 control-label">颜 色: </label>
      <div class="col-sm-4">
        <select class="input-xlarge  form-control" name='digital_color'>
          <option>红</option>
          <option>白</option>
          <option>蓝</option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <!-- Textarea 故障原因 -->
      <label class="col-sm-1 control-label">故障原因</label>
      <div class="col-sm-4">
        <div class="textarea">
          <textarea type="" class=" form-control" name='fault'> </textarea>
        </div>
        </div>
    </div>

    <div class="form-group">
      <!-- Textarea 备注信息 -->
      <label class="col-sm-1 control-label">备　　注</label>
      <div class="col-sm-4">
        <div class="textarea">
          <textarea class=" form-control" name='remarks'> </textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-1 control-label">维修类型</label>
      <div class="col-sm-4">
        <!-- Multiple Radios -->
        <label class="radio">
          <input type="radio" value="返厂检测" name="repair_type" checked="checked">
          返厂检测
        </label>
        <label class="radio">
          <input type="radio" value="返厂报价" name="repair_type">
          返厂报价
        </label>
      </div>
    </div>

    <div class="form-group">
      <input type='submit' class='btn btn-large btn-block btn-primary' value='提交送修信息'>
    </div>

    </fieldset>
    </form>
