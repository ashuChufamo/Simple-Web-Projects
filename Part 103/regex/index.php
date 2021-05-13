<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
	require_once(".\REGEX.php");

	$ip = "192.168.1.1";
	if (preg_match($IPAddress_REGEX, $ip)) 
	{
		echo "Your ip is well-formed.<br>";
	}
	else 
	{
		echo "Your ip is malformed.<br>";
	}
	
	$zip = "19076";
	if (preg_match($US_ZipCode_REGEX, $zip)) 
	{
		echo "Your zipcode is well-formed.<br>";
	}
	else 
	{
		echo "Your zipcode is malformed.<br>";
	}
		
	$email = "me@movies.com";
	if (preg_match($EMAIL_REGEX, $email)) 
	{
		echo "Your email is well-formed.<br>";
	}
	else 
	{
		echo "Your email is malformed.<br>";
	}

	$password = "Passw0rd";
	if (preg_match($PW_Complexity_REGEX, $password)) 
	{
		echo "Password is strong.<br>";
	} 
	else 
	{
		echo "Password is weak.<br>";
	}
	
	$url = "http:www.exceeddbsolutions.com";
	if (preg_match($URL_REGEX, $url)) 
	{
		echo "Your url is well-formed.<br>";
	}
	else 
	{
		echo "Your url is malformed.<br>";
	}
	
	$fp = fopen("http://www.ExceedDBSolutions.com","r"); 
	$html = "";
	while (!feof($fp) )
	{
		$html .= fgets($fp, 4096);
	}

	preg_match('/<title[^>]*>(.*?)<\/title>/ims',$html,$title); 
	echo "This is the page title: " . $title[1] . "<br>";
	fclose($fp);
	
	$newTitle = preg_replace('/<title[^>]*>(.*?)<\/title>/ims','<title>NEW TITLE</title>',$html);
	preg_match('/<title[^>]*>(.*?)<\/title>/ims',$newTitle,$title); 
	echo "This is the changed page title: " . $title[1] . "<br>";
	?>  
</body>
</html>