<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>
							送修时间
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
              串码
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
						<td>
              <?=$val['start_date']; ?>
						</td>

						<td>
              <?=$val['customer_name']; ?>
						</td>

            <td>
              <?=$val['customer_phone']; ?>
						</td>

            <td>
              <?=$val['brand']; ?>
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
              <a href="<?=base_url('index.php/details/show/'.$val['id'].'/store') ?>" class="btn btn-info btn-xs active" role="button">查看详细</a>
              <a href="receive/<?=$val['id']; ?>" class="btn btn-success btn-xs active" role="button">接收</a>
						</td>

					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
