<?php
  if(isset($_GET['action']))
  {
	$actioin = $_GET['action'];
	
	if($actioin == "not_match")
	{
		echo("<script>alert('Password not match! try again plz.')</script>");
	}
	elseif($actioin == "regi_success")
	{
		echo("<script>alert('Registration success!')</script>");
	}
	elseif($actioin == "login_fail")
	{
		echo("<script>alert('User id or password worong!')</script>");
	}
	elseif($actioin == "success")
	{
		echo("<script>alert('Action Success!')</script>");
	}
	elseif($actioin == "order")
	{
		echo("<script>alert('Order has been canceled successfully!')</script>");
	}
  }
?>