<?= form_open('export/run/');?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th class='no-print'>
							选择
						</th>
						<th>
						  送修时间
						</th>
						<th>
						  送修门店
						</th>
						<th>
							顾客姓名
						</th>
						<th>
							顾客电话
						</th>
						<th>
							品牌型号
						</th>
            <th>
              数码类型
            </th>
            <th>
              设备串码
            </th>
            <th>
              故障原因
            </th>
            <th>
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
              <?=$val['start_date']; ?>
						</td>

						<td>
              <?=$val['from_s']; ?>
						</td>

						<td>
              <?=$val['customer_name']; ?>
						</td>

            <td>
              <?=$val['customer_phone']; ?>
						</td>

            <td>
              <?=$val['brand'].$val['types']; ?>
						</td>

            <td>
              <?=$val['value']; ?>
						</td>

            <td>
              <?=$val['string_code']; ?>
						</td>

            <td>
              <?=$val['fault']; ?>
						</td>

            <td>
              <a href='<?=base_url('index.php/ware/take/'.$val['id']); ?>' class="btn btn-success btn-xs active" role="button">接收</a>
              <a href='<?=base_url('index.php/ware/back_s/'.$val['id']); ?>' class="btn btn-warning btn-xs active" role="button">退仓</a>
              <a href="<?=base_url('index.php/details/show/'.$val['id'].'/ware');?>" class="btn btn-info btn-xs active" role="button">查看详细</a>
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
<label for='submit' class='batch_lab'>批量处理 》</label>
<input type='submit' class='batch' target="_self" name='submit' value='batch_get_s'>
</div>

<div class='btn btn-default print-table'>
<label for='submit' class='toExcel_lab'>导出操作 》</label>
<input type='submit' class='toExcel' target="_self" name='submit' value='export'>
</div>

<div class='btn btn-default print-table'>
  <p class='print-button' onclick="jQuery('#table').print()" target="_self">打印表格 》</p>
</div>
</form>
<?=$page?>
