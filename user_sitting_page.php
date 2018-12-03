<?php
  if(!$_SESSION['user'])
  {
	  header('location: index.php?route=user_login');
  }
?>
<div action="" method="">
   <p class="biglavel"><label for=""><em><strong>User Sittings Page</strong></em></label></p><hr class="hr"><br><br><br><br><br>
   <p class="biglavel"><label for=""><strong>Welcome To User</strong></label></p><hr class="hr"><br><br><br>
	<p class="midlavel"><label for=""><a href="index.php?route=customer">User Details Forms</a></label></p><hr class="hr"><br>
	<p class="midlavel"><label for=""><a href="index.php?route=cus_view">Status Of Goods</a></label></p><hr class="hr"><br>
	<p class="midlavel"><label for=""><a href="index.php?route=update">Update Details Forms</a></label></p><hr class="hr"><br>
</div>
<a href="controller/accessQuery.php?system=logout">User: Log Out</a>