<form action="controller/accessQuery.php" method="post">
   <p class="biglavel"><label for=""><em><strong>User Details Forms</strong></em></label></p><hr class="hr"><br><br><br><br><br>
   <p class="biglavel"><label for=""><strong>Fill In Our  Registation Form To Use Our Services</strong></label></p><hr class="hr"><br><br><br>
	<p class="midlavel"><label for="">Name</label></p>
	<input type="text" class="text-field" id="" name="cus_name" size="35" placeholder="Customer Name" required>
	 <p class="midlavel"><label for="">Phone Number</label></p>
	<input type="number" class="text-field" id="" name="pnumber" size="35" placeholder="Phone Number" required>
	 <p class="midlavel"><label for="">E-mail ID</label></p>
	<input type="email" class="text-field" id="" name="emails" size="35" placeholder="E-mail" required>
	<p class="midlavel"><label for="">Types Of Material</label></p>
	<select name="tp_metarial" id="">
		<option>SELECT</option>
		<option>Electronics</option>
		<option>Furnitures</option>
		<option>Vehicles</option>
		<option>Utensils</option>
	</select>
	<br><br>
	<p class="midlavel"><label for="">Product Name</label></p>
	<select name="pro_name" id="">
		<option>SELECT</option>
		<option>Computers</option>
		<option>Bedsheets</option>
		<option>Cars</option>
		<option>Crockerys</option>
	</select>
	<br><br>
	<p class="midlavel"><label for="">Source</label></p>
	<select name="sources" id="">
		<option>SELECT</option>
		<option>Chittagong</option>
		<option>Hamburg</option>
		<option>New York</option>
		<option>London</option>
		<option>Haldia</option>
	</select>
	<br><br>
	<p class="midlavel"><label for="">Destination</label></p>
	<select name="destin" id="">
		<option>SELECT</option>
		<option>Chittagong</option>
		<option>Hamburg</option>
		<option>New York</option>
		<option>London</option>
		<option>Haldia</option>
	</select>
	<br><br>
	 <p class="midlavel"><label for="">Destination Address</label></p>
	<input type="text" class="text-field" id="" name="des_address" size="35" placeholder="Distination Address" required>
	<br><br>
	<button class="btn">
		<input type="submit" name="submit_order" value="Order Now" class="button">
	</button>
	<button class="btn">
	<a href="" value="BACK" class="button button1">
	</button><br>
</form> 