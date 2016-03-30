<!-- 生成form -->
<?php echo form_open('admin/add_user/edit',array('class'=>'form-horizontal')); ?>
    <fieldset>

    <div class="form-group">
      <!-- text input 工号 -->
      <label class="col-sm-1 control-label" for="input01">工号</label>
      <div class="col-sm-4">
      <input type="text" placeholder="输入用户工号" class="input-xlarge  form-control" name='username' value='<?=$table->username?>' required>
      </div>
    </div>

    <div class="form-group">
      <!-- text input 用户名 -->
      <label class="col-sm-1 control-label" for="input01">用户名</label>
      <div class="col-sm-4">
      <input type="text" placeholder="输入用户工号" class="input-xlarge  form-control" name='nickname' value='<?=$table->nickname?>' required>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 用户密码-->
      <label class="col-sm-1 control-label" for="input01">用户密码</label>
      <div class="col-sm-4">
      <input type="password" placeholder="输入用户密码" class="input-xlarge  form-control" name="password" value='<?=$table->password?>' required>
      </div>
    </div>

    <div class="form-group">
      <!-- Text input 用户类型-->
      <label class="col-sm-1 control-label" for="input01">用户类型</label>
        <div class="col-sm-4">
        <select class="form-control input-xlarge" name='usertype' value='<?=$table->userjob?>'>
            <?php foreach($usertypes as $usertype){
              if($table->userjob == $usertype->userjob){
                echo "<option selected='selected' value='$usertype->usertype'>$usertype->userjob</option>";
              }else{
                echo "<option value='$usertype->usertype'>$usertype->userjob</option>";
              }
            }?>
          </select>
        </div>
    </div>

    <div class="form-group">
      <!-- Text input 所属门店-->
      <label class="col-sm-1 control-label" for="input01">所属门店</label>
        <div class="col-sm-4">
        <select class="form-control input-xlarge" name='sector' value='<?=$table->sector?>'>
            <?php 
              foreach($sectors as $sector){
                if($sector->name == $table->sector){
                  echo "<option value='$sector->name' selected='selected'>$sector->name</option>";
                }else{
                  echo "<option value='$sector->name'>$sector->name</option>";
                }
              }
            ?>
          </select>
        </div>
    </div>

    <div class="form-group">
      <input type='submit' class='btn btn-large btn-block btn-primary' value='提交送修信息'>
    </div>

    </fieldset>
    </form>
