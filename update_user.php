<form action="controller/accessQuery.php?customer_up=<?php echo $_GET['cus_up'];?>" method="post">
<?php
$accessQuery = $con->query("select * from customer_order where id='$_GET[cus_up]'");
while($row = mysqli_fetch_array($accessQuery))
{
?>
 <p class="biglavel"><label for=""><em><strong>User Details Forms</strong></em></label></p><hr class="hr"><br><br><br><br><br>
   <p class="biglavel"><label for=""><strong>Fill In Our  Registation Form To Use Our Services</strong></label></p><hr class="hr"><br><br><br>
	<p class="midlavel"><label for="">Name</label></p>
	<input type="text" class="text-field" id="" name="cus_name" value="<?php echo($row['cus_name']);?>" size="35" placeholder="Customer Name" required>
	 <p class="midlavel"><label for="">Phone Number</label></p>
	<input type="number" class="text-field" id="" name="pnumber" value="<?php echo($row['contact']);?>" size="35" placeholder="Phone Number" required>
	 <p class="midlavel"><label for="">E-mail ID</label></p>
	<input type="email" class="text-field" id="" name="emails" value="<?php echo($row['email']);?>" size="35" placeholder="E-mail" required>
	<p class="midlavel"><label for="">Types Of Material</label></p>
	<select name="tp_metarial" id="" required>
		<?php
		if(!empty($row['tp_metarials'])){echo('<option>'.$row['tp_metarials'].'</option>');}
		?>
		<option value="">SELECT</option>
		<option>Electronics</option>
		<option>Furnitures</option>
		<option>Vehicles</option>
		<option>Utensils</option>
	</select>
	<br><br>
	<p class="midlavel"><label for="">Product Name</label></p>
	<select name="pro_name" id="" required>
		<?php
		if(!empty($row['pro_name'])){echo('<option>'.$row['pro_name'].'</option>');}
		?>
		<option  value="">SELECT</option>
		<option>Computers</option>
		<option>Bedsheets</option>
		<option>Cars</option>
		<option>Crockerys</option>
	</select>
	<br><br>
	<p class="midlavel"><label for="">Source</label></p>
	<select name="sources" id="" required>
		<?php
		if(!empty($row['source'])){echo('<option>'.$row['source'].'</option>');}
		?>
		<option value="">SELECT</option>
		<option>Chittagong</option>
		<option>Hamburg</option>
		<option>New York</option>
		<option>London</option>
		<option>Haldia</option>
	</select>
	<br><br>
	<p class="midlavel"><label for="">Destination</label></p>
	<select name="destin" id=""  required>
		<?php
		if(!empty($row['destination'])){echo('<option>'.$row['destination'].'</option>');}
		?>
		<option value="">SELECT</option>
		<option>Chittagong</option>
		<option>Hamburg</option>
		<option>New York</option>
		<option>London</option>
		<option>Haldia</option>
	</select>
	<br><br>
	 <p class="midlavel"><label for="">Destination Address</label></p>
	<input type="text" class="text-field" id="" name="des_address"  value="<?php echo($row['des_address']);?>" size="35" placeholder="Distination Address" required>
	<br><br>
	<button class="btn">
		<input type="submit" name="submit_order_update" value="Order Now" class="button">
	</button>
	<button class="btn">
	<a href="" value="BACK" class="button button1">
	</button><br>
<?php }?>
</form> 