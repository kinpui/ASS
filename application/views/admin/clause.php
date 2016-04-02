<!-- 售后条款 -->

<?php echo form_open('admin/edit_clause'); ?>
<!-- 厂家管理 start  -->
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">售后条款</h3>
  </div>
  <div class="row">

    <div class="col-lg-6 pad20">
        <div class="input-group">
        <textarea rows="30" cols="80" style="resize:none;" name='clause'><?php echo $clause[0]->clause;?></textarea>
        </div>
    </div>
    <div class="col-lg-4 pad20">
       <input type='submit' class="btn btn-success" role="button" value='提交修改'> 
    </div>
  </div> 
</div>
<!-- 颜色管理 end  -->
</form>

