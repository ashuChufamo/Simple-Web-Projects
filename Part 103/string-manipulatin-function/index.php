<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
		$movie = "Blade Runer, 19882, R, Ridley Scott , Harrison Ford, Rutger Hauer, Sean Yung";
              //  Title , Year,  MPAA,  Director, Actors

		echo "The length of the string \$movie is: " . strlen($movie) . "<br>";
		$position = strpos($movie,":");
	echo "position=".$position.'<br/>';
		}
		if($position !==false) {
		echo "The title of the movie is: " . substr($movie,0,$position) . "<br>";
}
		echo "The number of words in the string is: " . str_word_count($movie) . "<br>";
		print_r (count_chars("$movie",1));
		echo "<br>";
		echo "This is the string reversed: " . strrev($movie) . "<br>";
		echo "There are " . substr_count($movie,",") . " commas in the string<br>";
		echo "<br>";
		
		$movieArray = explode(",",$movie);
		print_r($movieArray);
		echo "<br>";
		$movieArray[0] = "Blade Runner";
		$movieArray[1] = "1982";
		$movieArray[6] = "Sean Young";
		$implodedMovie = implode(";",$movieArray);
		echo "Imploded string from \$movieArray: $implodedMovie<br>";
		echo "<br>";
	
		$movie = "Blade Runer, 19882, R, Ridley Scott , Harrison Ford, Rutger Hauer, Sean Yung";
              //  Title , Year,  MPAA,  Director, Actors
		echo $movie . "<br>";

		$movie = str_replace("Runer","Runner",$movie);
		echo $movie . "<br>";
		$movie = str_replace("19882","1982",$movie);
		echo $movie . "<br>";
		$movie = str_replace("Yung","Young",$movie);
		echo $movie . "<br>";
	?>  
</body>
</html>
