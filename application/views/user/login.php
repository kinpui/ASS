<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>欢迎使用创宇数码售后系统</title>
<link rel='stylesheet prefetch' href='<?php echo base_url('static/css/api-style.css')?>'>

<link rel='stylesheet prefetch' href='<?php echo base_url('static/css/bootstrap.min.css')?>'>
</head>
<body class="login-page">
<div class="login-form">
		<div class="login-content">
      <?php echo form_open('user/check')?>
				<div class="form-group">
          <p class='input-label'>注意:输入手机号码后点击查询按钮</p>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>
						</div>
						<input type="text" class="form-control" name="phone" placeholder="输入你的手机号码" autocomplete="off" />
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="fa fa-sign-in"></i>
						查询
					</button>
				</div>
				<!-- Implemented in v1.1.4 -->				<div class="form-group">
			</form>
		</div>
	</div>
 </div>
</body>
</html>
