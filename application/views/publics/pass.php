<?=form_open($this->uri->segment(1).'/changepass',array('class'=>'form-horizontal'))?>

<fieldset>
<div class="form-group">
  <!-- Text input 原密码-->
  <label class="col-sm-1 control-label" for="input01">旧的密码</label>
  <div class="col-sm-4">
    <input type="password" placeholder="输入原来的密码" class="input-xlarge  form-control" name='oldPass' required>
  </div>
</div>
<div class="form-group">
  <!-- Text input 新密码-->
  <label class="col-sm-1 control-label" for="input01">新的密码</label>
  <div class="col-sm-4">
    <input type="password" placeholder="输入新的用户密码" class="input-xlarge  form-control" name='newPass' required>
  </div>
</div>
<div class="form-group">
<input type='submit' class='btn btn-large btn-block btn-primary' value='提交送修信息'>
</div>
</fieldset>
