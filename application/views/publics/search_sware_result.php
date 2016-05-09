<!-- 表格 -->
<div class="container-fluid" id='table'>
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th class='no-print'>
							导出
						</th>
						<th>
							品牌型号
						</th>
            <th>
              数码类型
            </th>
            <th>
              位置
            </th>
            <th class='no-print'>
              操作
            </th>
					</tr>
				</thead>
				<tbody>
          <?php foreach($table as $val): ?>
					
						<td class='no-print'>
              <p class='p-checkbox'><input type="checkbox" id="checkbox1" name='export[]' value='<?=$val['id']?>'></p>
						</td>
            <td>
              <?= $val['brand'].$val['types']; ?>
						</td>

            <td>
              <?= $val['value']; ?>
						</td>

            <td>
              <?= $val['state_msg']; ?>
						</td>

            <td class='no-print'>
              <a href="<?= base_url('index.php/details/show/'.$val['id'].'/store') ?>" class="btn btn-info btn-xs active" role="button">查看详细</a>
              <a href="<?=base_url('index.php/store/del/'.$val['id'])?>" class="btn btn-danger btn-xs active" role="button">删除</a>
						</td>

					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class='btn btn-default print-table'>
  <button class='print-button' onclick="jQuery('#table').print()" target="_self">打印表格</button>
</div>
<div class='btn btn-default print-table'>
<a class='toExcel' href="<?= base_url('index.php/export/condition/store');?>" target="_self">导出表格</a>
</div>

