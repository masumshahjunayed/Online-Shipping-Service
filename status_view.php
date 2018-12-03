<form action="controller/accessQuery.php" method="post">
	<p class="biglavel"><label for=""><em><strong>Status Of Goods or View</strong></em></label></p><hr class="hr"><br><br><br><br><br>
	<button class="btn">
		<input type="status" value="STATUS" class="button">
	</button><br><br>
</form>
<div>
<table>
	<tr>
		<th>#</th>		
		<th>Name</th>
		<th>User Id</th>
		<th>Contact</th>
		<th>Email</th>
		<th>T.O.M</th>
		<th>Products</th>
		<th>Source</th>
		<th>Destination</th>
		<!--<th>Address</th>-->
		<th>Date</th>
		<th>Action</th>
	</tr>
	<?php
	$accessQuery = $con->query("select * from customer_order order by id desc");
	$serial = 1;
	while($row = mysqli_fetch_array($accessQuery))
	{
	?>
	<tr>
		<td><?php echo $serial++;?></td>
		<td><?php echo($row['cus_name']);?></td>
		<td><?php echo($row['cus_id']);?></td>		
		<td><?php echo($row['contact']);?></td>
		<td><?php echo($row['email']);?></td>
		<td><?php echo($row['tp_metarials']);?></td>		
		<td><?php echo($row['pro_name']);?></td>
		<td><?php echo($row['source']);?></td>
		<td><?php echo($row['destination']);?></td>
		<!--<td><?php echo($row['des_address']);?></td>-->
		<td><?php echo($row['include_date']);?></td>
		<th>
			<a href="index.php?route=update&cus_up=<?php echo($row['id']);?>">Update</a>
			<a href="controller/accessQuery.php?cus_del=<?php echo($row['id']);?>">Delete</a>
		</th>
	</tr>
	<?php }?>
</table><br><br><br>
	<button class="btn">
		<input type="back" value="BACK" class="button">
	</button><br><br><br><br><br>
</div>
