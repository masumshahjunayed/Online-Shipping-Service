<?php
  if($_SESSION['user_type'] !== "admin")
  {
	  header('location: index.php?route=admin_login');
  }
?>
	<div action="" method="">
		<p class="biglavel"><label for=""><strong>Welcome To Administrator</strong></label></p><hr class="hr"><br><br><br><br><br>
		<p class="midlavel"><label for=""><a href="index.php?route=a_view"> View Customer Details</a></label></p><hr class="hr"><br>
	</div>
<a href="controller/accessQuery.php?system=logout">User: Log Out</a>