<a href='add' class='add-user btn btn-primary btn-lg' role='button'>添加新用户</a>
<hr>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>
							用户ID
            </th>
						<th>
							用户昵称
            </th>
						<th>
							用户职位
						</th>
						<th>
						  所属门店
						</th>
						<th>
							操作
						</th>
            
					</tr>
				</thead>
				<tbody>
          <?php foreach($table as $val): ?>
						<td>
              <?php echo $val->username; ?>
						</td>

						<td>
              <?php echo $val->nickname; ?>
						</td>

						<td>
              <?php echo $val->userjob; ?>
						</td>

            <td>
              <?php echo $val->sector; ?>
						</td>

            <td>
            <a class="btn btn-success btn-xs active" role="button" href='<?php echo base_url('index.php/admin/edit/'.$val->id)?>'>修改用户信息</a>
            </td>
					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php echo $page;?>
