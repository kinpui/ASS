<div class="panel panel-<?=empty($status)?'danger':$status;?>">
    <div class="panel-heading">
    <h3 class="panel-title"><?=empty($status)?'出现错误':'操作成功';?></h3>
    </div>
    <div class="panel-body">
      <?=$msg?>
    </div>
</div>
<div class="alert alert-warning" role="alert">
  <strong>提示!</strong>2秒后自动跳回上一个页面,如无法自动跳回。请
  <a href="<?=$callback?>" class="alert-link">点击这里返回</a>
</div>
<? if(!empty($callback)): ?>
<script>
window.onload = function(){

  setTimeout(function(){
     window.location.href = "<?=$callback?>";
  },2000);
}
</script>
<? endif; ?>
