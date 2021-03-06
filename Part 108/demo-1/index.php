<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP</title>
</head>
<body>
<?php
	$password = 'dont_h@ck_m3';
	// a two character salt from the alphabet "./0-9A-Za-z".
	$time_start = microtime(true);
	$DESPassword = crypt($password,'zx');
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	echo "Elapsed time for Standard DES: " . $time . "<br>";
	echo "DES encrypted password: " . $DESPassword . "<br>";
	echo "<font color='red'>Standard DES is too weak for password encryption</font><br><br>";
	// a 9-character string consisting of an underscore followed 
	// by 4 bytes of iteration count and 4 bytes of salt. 
	// These are encoded as printable characters, 
	// 6 bits per character, least significant character first. 
	// The values 0 to 63 are encoded as "./0-9A-Za-z".
	$time_start = microtime(true);
	$EXTDESPassword = crypt($password,'_S4asdfjklfz');
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	echo "Elapsed time for Extended DES: " . $time . "<br>";
	echo "Extended DES encrypted password: " . $EXTDESPassword . "<br>";
	echo "<font color='red'>Extended DES is too weak for password encryption</font><br><br>";
	// a twelve character salt starting with $1$
	$time_start = microtime(true);
	$MD5Password = crypt($password,'$1$asdfjklfzxvb');
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	echo "Elapsed time for MD5: " . $time . "<br>";
	echo "MD5 encrypted password: " . $MD5Password . "<br>";
	echo "<font color='red'>MD5 is too weak for password encryption</font><br><br>";
	// a salt as follows: "$2a$", "$2x$" or "$2y$", 
	// a two digit cost parameter, "$", and 22 characters 
	// from the alphabet "./0-9A-Za-z". 
	$time_start = microtime(true);
	$BlowfishPassword = crypt($password,'$2a$09$asdfjklfz85t5dmnedlsi9');
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	echo "Elapsed time for Blowfish: " . $time . "<br>";
	echo "Blowfish encrypted password: " . $BlowfishPassword . "<br><br>";
	// a sixteen character salt prefixed with $5$. If the salt 
	// string starts with 'rounds=<N>$', the numeric value of N 
	// is used to indicate how many times the hashing loop should 
	// be executed, much like the cost parameter on Blowfish. 
	// The default number of rounds is 5000, there is a 
	// minimum of 1000 and a maximum of 999,999,999. 
	$time_start = microtime(true);
	$SHA256Password = crypt($password,'$5$rounds=5000$asdfjklfz85t5dmn');
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	echo "Elapsed time for SHA-256: " . $time . "<br>";
	echo "SHA-256 encrypted password: " . $SHA256Password . "<br><br>";
	// a sixteen character salt prefixed with $6$. If the 
	// salt string starts with 'rounds=<N>$', the numeric 
	// value of N is used to indicate how many times the 
	// hashing loop should be executed
	$time_start = microtime(true);
	$SHA512Password = crypt($password,'$6$rounds=5000$asdfjklfz85t5dmn');
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	echo "Elapsed time for SHA-512: " . $time . "<br>";
	echo "SHA-512 encrypted password: " . $SHA512Password . "<br><br>";
?>
</body>
</html>
