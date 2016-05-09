<!-- 生成form -->
<?php echo form_open('sware/submit_form',array('class'=>'form-horizontal')); ?>
    <fieldset>
    <div class="form-group">
      <!-- Select Basic 下拉选择品牌-->
      <label class="col-sm-1 control-label">品 牌: </label>
      <div class="col-sm-4">
        <select class="input-xlarge  form-control" name='brand'>
          <?php foreach($brand as $bra): ?>
          <option value='<?=$bra['value']?>'><?=$bra['value']?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 品牌型号-->
      <label class="col-sm-1 control-label" for="input01">型号</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入数码的品牌和型号" class="input-xlarge  form-control" name='types' required>
      </div>
    </div>


    <div class="form-group">
      <!-- Text input 数码串码-->
      <label class="col-sm-1 control-label" for="input01">串    码</label>
      <div class="col-sm-4">
        <input type="text" placeholder="输入数码产品全串码" class="input-xlarge  form-control" name='string_code' required>
      </div>
    </div>

    <div class="form-group">
      <!-- Select Basic 数码类型下拉选择-->
      <label class="col-sm-1 control-label">数码类型</label>
      <div class="col-sm-4">
        <select class="input-xlarge  form-control" name='digital_type'>
          <?php foreach($digital_type as $val):?>
          <option value='<?=$val['id']?>'><?=$val['value']?></option>
          <?php endforeach;?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <!-- Select Basic 下拉选择颜色-->
      <label class="col-sm-1 control-label">颜 色: </label>
      <div class="col-sm-4">
        <select class="input-xlarge  form-control" name='digital_color'>
          <?php foreach($color as $col): ?>
          <option value='<?=$col['value']?>'><?=$col['value']?></option>
          <?php endforeach; ?>
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
      <input type='submit' class='btn btn-large btn-block btn-primary' value='提交送修信息'>
    </div>

    </fieldset>
    </form>
