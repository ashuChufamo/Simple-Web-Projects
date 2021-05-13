<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
		require_once("./requires.php");
		$filename = './top10scifi.txt';
		$filecontents = ReadCSVFile($filename);
		echo br.br;
		foreach ($filecontents as $element)
		{
			echo $element[0] . "-" . $element[1] . "-" . $element[2] . "-" . $element[3] . br;
		}	
	?>  
</body>
</html>