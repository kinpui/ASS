<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>
							购买时间
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
              位置
            </th>
            <th>
              操作
            </th>
					</tr>
				</thead>
				<tbody>
          <?php foreach($table as $val): ?>
						<td>
              <?php echo $val->buy_date; ?>
						</td>

						<td>
              <?php echo $val->customer_name; ?>
						</td>

            <td>
              <?php echo $val->customer_phone; ?>
						</td>

            <td>
              <?php echo $val->brand; ?>
						</td>

            <td>
              <?php echo $val->digital_type; ?>
						</td>

            <td>
              <?php echo $val->state_msg; ?>
						</td>

            <td>
              <a href="details/<?php echo $val->id; ?>" class="btn btn-info btn-xs active" role="button">查看详细</a>
						</td>

					</tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
