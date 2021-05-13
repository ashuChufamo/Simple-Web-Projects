<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
		require_once("./requires.php");
		$csvfilename = './top10scifi.txt';
		$filecontents = readcsvfile($csvfilename);
		$xmlfilename = './movies.xml';
		
		$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><movies></movies>');
		$xml->addAttribute('version', '1.5');
		foreach ($filecontents as $element)
		{
			$film = $xml->addChild('film');
			$film->addChild('title', $element[0]);
			$film->addChild('director', $element[1]);
			$film->addChild('year', $element[2]);
			$film->addChild('rating', $element[3]);
		}	
		echo br.br;
		if ($xml->asXML($xmlfilename))
			echo "XML File Generated...";
		else
			echo "Error generating XML file.";

		echo br.br;
			
		$movies = simplexml_load_file($xmlfilename);
		print_r($movies);

		echo br.br;
			
		foreach ($movies->film as $f) 
		{
			echo $f->title . " Released  " . $f->year . " MPAA Rating " . $f->rating . " Directed by " . $f->director . br;
		}
	?>  
</body>
</html>