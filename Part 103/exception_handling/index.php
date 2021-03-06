<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
	<?php
		require_once("./db.php");
		require_once("./LoadAppConfiguration.php");
		require_once("./constants.php");
		
		try
		{
			if (DEBUG)
			{
				echo "Initializing..." . br;
			}
			
			$dbh = db::GetInstance();
			/*
			throw new ConfigurationException("Throw to test redirection");
			*/
		}
		catch (ConfigurationException $ex)
		{
			echo '<meta http-equiv="refresh" content="0; url=http://'.$_SERVER["HTTP_HOST"].'/PHP/lecture-03/exception_handling/error.php">';
		}
		catch (DBSanitizeException $ex)
		{
			
		}
		catch (DBQueryException $ex)
		{
		
		}
		catch (DBException $ex)
		{
			echo "DB Exception";
		}
		catch (Exception $EX)
		{
			echo "Exception Type thrown";
		}	
	?>  
</body>
</html>
