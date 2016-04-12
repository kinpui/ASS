<!-- 生成form -->
<?php echo form_open('admin/add_store_h',array('class'=>'form-horizontal')); ?>
    <fieldset>

    <div class="form-group">
      <!-- text input 门店名称 -->
      <label class="col-sm-1 control-label" for="input01">门店名</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入新门店名称" class="input-xlarge  form-control" name='storename' required>
      </div>
    </div>

    <div class="form-group">
      <!-- text input 门店电话 -->
      <label class="col-sm-1 control-label" for="input01">门店电话</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入门店电话" class="input-xlarge  form-control" name='tel' required>
      </div>
    </div>

    <div class="form-group">
      <!-- text input 门店地址 -->
      <label class="col-sm-1 control-label" for="input01">门店地址</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入门店地址" class="input-xlarge  form-control" name='addr' required>
      </div>
    </div>

    <div class="form-group">
      <!-- text input 所属区域 -->
      <label class="col-sm-1 control-label" for="input01">所属区域</label>
      <div class="col-sm-4">
          <select class="form-control input-xlarge" name='region'>
            <?php foreach($regions as $region):?>
            <option value='<?php echo $region->id; ?>'><?php echo $region->region; ?></option>
            <?php endforeach; ?>
          </select>
      </div>
    </div>

    <div class="form-group">
      <input type='submit' class='btn btn-large btn-block btn-primary' value='添加门店'>
    </div>

    </fieldset>
    </form>
