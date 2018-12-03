<div action="controller/accessQuery.php" method="post">
   <p class="biglavel"><label for=""><em><strong>View Customer Details</strong></em></label></p><hr class="hr"><br><br><br><br>
   <button class="btn">
		<input type="back" value="BACK" class="button">
	</button><br><br><br><br><br>

	<table>
		<tr>
			<td>#</td>
			<td>user_id</td>
			<td>user_name</td>
			<td>p_num</td>
			<td>email</td>
			<td>source</td>
			<td>destination</td>
			<td>Order Cancel</td>
		</tr>
		<?php
		$accessQuery = $con->query("select * from customer_order order by id desc");
		$serial = 1;
		while($row = mysqli_fetch_array($accessQuery))
		{
		?>
		<tr>
			<td><?php echo $serial++;?></td>
			<td><?php echo($row['cus_id']);?></td>
			<td><?php echo($row['cus_name']);?></td>
			<td><?php echo($row['contact']);?></td>
			<td><?php echo($row['email']);?></td>
			<td><?php echo($row['source']);?></td>
			<td><?php echo($row['destination']);?></td>
			<td><a href="controller/accessQuery.php?order=<?php echo($row['id']);?>">Order Cancel</a></td>
		</tr>
		<?php }?>
	</table>
</div>