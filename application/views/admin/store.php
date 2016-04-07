<a href='add_store' class='add-user btn btn-primary btn-lg' role='button'>添加门店</a>
<hr>
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
						  所属区域
						</th>
						<th>
							操作
						</th>
            
					</tr>
				</thead>
				<tbody>
          <?php foreach($table as $val): ?>
						<td>
              <?php echo $val->name; ?>
						</td>

						<td>
              <?php echo $val->region; ?>
						</td>

            <td>
            <a class="btn btn-success btn-xs active" role="button" href='<?php echo site_url('admin/edit_store/'.$val->id); ?>'>修改门店信息</a>
            </td>
					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?=$page?>
