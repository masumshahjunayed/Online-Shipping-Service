<form action="controller/accessQuery.php" method="post">
	<p class="biglavel"><label for="">Registation Here</label></p><hr class="hr">
	<p class="midlavel"><label for="">Name</label></p>
	<input type="text" class="text-field" id="" name="name" size="35" placeholder="Name" required>
	<p class="midlavel"><label for="">Address</label></p>
	<input type="text" class="text-field" name="address" size="35" placeholder="Address" required>
	<p class="midlavel"><label for="">Age</label></p>
	<input type="number" class="text-field" name="age" size="35" placeholder="Age" required>
	<p class="midlavel"><label for="">Phone Number</label></p>
	<input type="number" class="text-field" name="contact" size="15" placeholder="Phone Number" required>
	<p class="midlavel"><label for="">E-mail</label></p>
	<input type="email" class="text-field" name="user_email" size="35" placeholder="E-mail" required>
	<p class="midlavel"><label for="">Password</label></p>
	<input type="password" class="text-field" name="password" size="35" placeholder="Password" required>
	<p class="midlavel"><label for="">Retype Password</label></p>
	<input type="password" class="text-field" name="con_password" size="35" placeholder="Retype Password" required>
	<br><br>
	<button class="btn">
		<input type="reset" value="RESET" class="button">
	</button>
	<button class="btn">
	<input type="submit" value="SUBMIT" name="sub_regi" class="button button1">
	</button><br>
	
	<a class="btn-user <?php if(empty($_GET['userid'])){echo('hide');}?>" href="index.php?route=user_login&userid=<?php echo($_GET['userid']);?>"><?php if(isset($_GET['userid'])){echo('Your User Id: '.$_GET['userid']);}else{echo('USER id');}?></a>
	
</form>