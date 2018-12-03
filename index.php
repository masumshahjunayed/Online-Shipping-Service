<?php
require_once('config.php');
include('view/header.php');
?>
<div class="panel" >
<?php
  if(isset($_GET['route']))
  {
	$route = $_GET['route'];
	
	if($route == "home")
	{
		include('view/root.php');
	}
	elseif($route == "regi_form")
	{
		include('view/registation.php');
	}
	elseif($route == "user_login")
	{
		include('view/u_login.php');
	}
	elseif($route == "admin_login")
	{
		include('view/a_login.php');
	}
	elseif($route == "contact")
	{
		include('view/contact.php');
	}
	elseif($route == "about")
	{
		include('view/about_us.php');
	}
	elseif($route == "user")
	{
		include('view/user_sitting_page.php');
	}
	elseif($route == "customer")
	{
		include('view/user_details.php');
	}
	elseif($route == "cus_view")
	{
		include('view/status_view.php');
	}
	elseif($route == "update")
	{
		include('view/update_user.php');
	}
	elseif($route == "admin_sitting")
	{
		include('view/administrator.php');
	}
	elseif($route == "a_view")
	{
		include('view/admin_view.php');
	}
	elseif($route == "cancel")
	{
		include('view/cancel_request.php');
	}
	else
	{
		include('view/404.php');
	}
	
  }
  else
  {
	include('view/root.php');
  }
?>
</div>
<?php
include('view/feedback.php');
include('view/footer.php');
?>