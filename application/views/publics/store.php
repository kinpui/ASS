<?php if(!empty($add)):?>
<a href="<?=base_url('index.php/admin/add_store')?>" class='add-user btn btn-primary btn-lg' role='button'>添加门店</a>
<hr>
<?php endif; ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>
              门店名称
            </th>
            <th>
              门店电话
            </th>
            <th>
              门店地址
            </th>
						<th>
						  所属区域
            </th>
<?php if(!empty($edit)):?>
						<th>
							操作
						</th>
<?php endif;?>
					</tr>
				</thead>
				<tbody>
          <?php foreach($table as $val): ?>
						<td>
              <?php echo $val->name; ?>
						</td>

						<td>
              <?php echo $val->tel; ?>
						</td>

            <td>
              <?php echo $val->addr; ?>
            </td>

						<td>
              <?php echo $val->region; ?>
						</td>

<?php if(!empty($edit)):?>
            <td>
            <a class="btn btn-success btn-xs active" role="button" href='<?php echo site_url('admin/edit_store/'.$val->id); ?>'>修改门店信息</a>
            </td>
<?php endif;?>
					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?=$page?>
