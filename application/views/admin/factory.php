<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12 col-lg-6">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>
						  颜色名称
						</th>
            <th>
              操作
            </th>
					</tr>
				</thead>
				<tbody>
          <?php foreach($table as $val): ?>
						<td>
              <?php echo $val->value; ?>
						</td>

            <td>
              <a href="<?php echo base_url('index.php/admin/del_factory/'.$val->id);?>" class="btn btn-info btn-xs active" role="button">删除颜色</a>
						</td>

					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
