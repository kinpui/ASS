<?php echo form_open('admin/add_color'); ?>
<!-- 颜色管理 start  -->
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">颜色管理</h3>
  </div>
 <div class="row">

  <div class="col-lg-4 pad20">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="输入颜色名称" name='color'>
        <span class="input-group-btn">
          <input class="btn btn-default add_color" type="submit" value='添加颜色' />
        </span>
      </div>
  </div>
  <div class="col-lg-4 pad20">
     <a href="show_color" class="btn btn-success" role="button">查看所有颜色</a> 
  </div>
  </div> 
</div>
<!-- 颜色管理 end  -->
</form>

<!-- 厂家管理 -->

<?php echo form_open('admin/add_factory'); ?>
<!-- 厂家管理 start  -->
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">厂家管理</h3>
  </div>
 <div class="row">

  <div class="col-lg-4 pad20">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="输入厂家名称" name='factory'>
        <span class="input-group-btn">
          <input class="btn btn-default add_color" type="submit" value='添加厂家' />
        </span>
      </div>
  </div>
  <div class="col-lg-4 pad20">
     <a href="show_factory" class="btn btn-success" role="button">查看所有厂家</a> 
  </div>
  </div> 
</div>
<!-- 颜色管理 end  -->
</form>

<!-- 条款 -->
<div class="col-lg-4 pad20">
  <a href="clause" class="btn btn-success" role="button">编辑查看条款</a> 
</div>