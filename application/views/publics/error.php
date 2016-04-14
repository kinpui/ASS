<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Error</title>
</head>
<body>
<div class="panel panel-<?php echo empty($status)?'danger':$status;?>">
      <div class="panel-heading">
      <h3 class="panel-title"><?php echo empty($status)?'出现错误':'操作成功';?></h3>
      </div>
      <div class="panel-body">
        <?=$msg?>
      </div>
    </div>
</body>
</html>
