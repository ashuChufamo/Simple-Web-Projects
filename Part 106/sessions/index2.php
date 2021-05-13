<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
		require_once ("getUserID.php");
		
		session_start();
		$_SESSION['username'] = "Ellen Ripley";
		
		$_SESSION['userid'] = getUserID($_SESSION['username']);
		
		echo "The current user is: " . $_SESSION['username'] . " userID: " . $_SESSION['userid'] . " sessionid: " . session_id();

	?>  
</body>
</html>
