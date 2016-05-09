<!-- 表格 -->
<?php 
if(!empty($not)):
  echo '<h1>无未返回记录</h1>';
else:
echo form_open('export/run/');
?>
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
              串码
            </th>
            <th>
              故障原因
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
              <p class='p-checkbox'><input class='checkbox' type="checkbox" id="checkbox1" name='export[]' value='<?=$val['id']?>'></p>
						</td>
            <td>
              <?= $val['brand'].$val['types']; ?>
						</td>

            <td>
              <?= $val['value']; ?>
						</td>
            <td>
              <?= $val['string_code']; ?>
						</td>
            <td>
              <?= $val['fault']; ?>
						</td>
            <td>
              <?= $val['state_msg']; ?>
						</td>

            <td class='no-print'>
              <a href="<?= base_url('index.php/details/show/'.$val['id'].'/sware') ?>" class="btn btn-info btn-xs active" role="button">查看详细</a>
              <?= empty($val['new_string'])?'':'<span class="label label-warning">(新串码)</span>'; ?>
              <?= empty($val['offer'])?'':'<span class="label label-warning">(报价)</span>'; ?>
              <a href="<?=base_url('index.php/sware/del/'.$val['id'])?>" class="btn btn-danger btn-xs actiae right glyphicon glyphicon-trash" role="button"></a>
						</td>

					</tr>
          <?php endforeach; ?>
          <tr class='no-print'><td class='select-all'>全选</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class='btn btn-default print-table'>
<label for='submit' class='toExcel_lab'>导出操作 》</label>
<input type='submit' class='toExcel' target="_self" name='submit' value='sware_export'>
</div>

<div class='btn btn-default print-table'>
  <p class='print-button' onclick="jQuery('#table').print()" target="_self">打印表格 》</p>
</div>
</form>
<?php 
endif;
echo empty($page)?'':$page;
?>
