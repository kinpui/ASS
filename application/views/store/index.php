<?php $this->load->view('header.php',array('title'=>'欢迎'.$nickname.'售后员')); ?>
		<div class="pad20">
			<!--postion start-->
			<div class="postion ">
				<div class="pos-txt"><span class="fz24 padr5">当前位置</span></div>
        <div class="pos-link mart20"><?php echo $nickname; ?>售后专员的送修记录</div>
			</div>
			<!--postion end-->
    </div>
<?php $this->load->view('footer');?>
