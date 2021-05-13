<?php
	if ($_COOKIE['auth'] == "ok") { 
	  $msg = "<P>Welcome to secret page A, authorized user!</p>";
	} else {
		header("Location: show_login.html");
		exit;
	}
?>
<HTML>
<HEAD>
<TITLE>Secret Page A</TITLE>
</HEAD>
<BODY>
<?php  echo "$msg"; ?>
</BODY>
</HTML>
