<!-- 生成form -->
<?php echo form_open('admin/edit_store_h',array('class'=>'form-horizontal')); ?>
    <fieldset>
      <input type='hidden' value='<?php echo $table->id; ?>' >

    <div class="form-group">
      <!-- text input 门店名称 -->
      <label class="col-sm-1 control-label" for="input01">门店名</label>
      <div class="col-sm-4">
      <input type="text" placeholder="输入新门店名称" class="input-xlarge  form-control" name='storename' value='<?php echo $table->name;?>' required>
      </div>
    </div>

    <div class="form-group">
      <!-- text input 所属区域 -->
      <label class="col-sm-1 control-label" for="input01">所属区域</label>
      <div class="col-sm-4">
          <select class="form-control input-xlarge" name='region'>
          <?php 
var_dump($regions);return false;
            foreach($regions as $region){

              if($region->reigon == $table->region){
                echo "<option value='$region->id' selected='selected'>$region->region</option>";
              }else{
                echo "<option value='$region->id'>$region->region</option>";
              }
            } 
          ?>
          </select>
      </div>
    </div>

    <div class="form-group">
      <input type='submit' class='btn btn-large btn-block btn-primary' value='添加门店'>
    </div>

    </fieldset>
    </form>
