<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
		session_start();

		if (!isset($_SESSION['visits']))
		{
			$_SESSION['visits'] = 1;
		}
		else
		{
			$_SESSION['visits']++;
		}

		echo 'The value of $_SESSION is: ' . $_SESSION['visits'] . "<br>";
		// session_destroy();
	?>  
</body>
</html>
