<?php 
	if($_SESSION['user_type'] == "admin")
	{
?>
<nav>
	<ul class="navigation">
		<li><a href="index.php?route=admin_sitting" class="selected">Home</a></li>
		<li><a href="#">Login</a>
			<ul>
				<li><a href="index.php?route=user_login">User Login</a></li>
			</ul>
		</li>
	</ul>
</nav>
<?php }
	elseif($_SESSION['user_type'] == "user")
	{
?>
<nav>
	<ul class="navigation">
		<li><a href="index.php?route=user">Home</a></li>		
		<li><a href="index.php?route=customer">Registation</li>
		<li><a href="#">Login</a>
			<ul>
				<li><a href="index.php?route=user_login">User Login</a></li>
				<li><a href="index.php?route=admin_login"> Admin Login</a></li>
			</ul>
		</li>
	</ul>
</nav>
<?php }
else
{
?>
<nav>
	<ul class="navigation">
		<li><a href="index.php?route=home" class="selected">Home</a></li>
		<li><a href="index.php?route=about">About Us</a></li>
		<li><a href="index.php?route=regi_form">Registation</a></li>
		<li><a href="#">Login</a>
			<ul>
				<li><a href="index.php?route=user_login">User Login</a></li>
				<li><a href="index.php?route=admin_login"> Admin Login</a></li>
			</ul>
		</li>
		<li><a href="index.php?route=contact">Contact</a></li>
	</ul>
</nav>
<?php }?>