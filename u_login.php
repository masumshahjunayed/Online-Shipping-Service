<form action="controller/accessQuery.php" method="post">
	<p class="biglavel"><label>User Login</label></p><hr class="hr">
	<p class="midlavel"><label>User ID</label></p>
	<input type="text" class="text-field" name="userID" value="<?php if(isset($_GET['userid'])){echo($_GET['userid']);}?>" size="35" placeholder="User Name" required>
	<p class="midlavel"><label for="">Password</label></p>
	<input type="password" class="text-field" name="password" size="35" placeholder="Password" required>
	<br><br>
	<button class="btn">
		<input type="submit" name="login" value="Log IN" class="button">
	</button>
</form>