<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> PHP</title>
</head>
<body>
	<?php
		try
		{
			require_once("constants.php");
			require_once("pdo_init.php");
			
			$xmlfilename = './movies.xml';
			
			$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><movies></movies>');
			$xml->addAttribute('version', '2.0');
			$sql = "Select f.film_id, f.title,f.release_year,
					ac.first_name,f.description,f.rating 
					from film as f,film_actor as fa,
					actor as ac  where 
			fa.film_id=f.film_id and fa.actor_id=ac.actor_id";

			$results = $dbh->query($sql);
		
			// loop through the results to echo to screen
			while($row = $results->fetch())
			{
				echo($row[0] . ', '.
				$row[1] . ', '.
				$row[2] . ', '.
				$row[3] . ', '.
				$row[4] . ', '.
				$row[5] );
				echo br;
			}
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}

	?>  
</body>
</html>