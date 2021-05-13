<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Advanced PHP</title>
</head>
<body>
		<?php
			// reads a csv formatted file returning a two-dimensional array of file contents
			function ReadCSVFile($filename)
			{
				if (DEBUG)
				{
				  echo "Entering - " . __FILE__ .":". __FUNCTION__ .":". __LINE__ . br;
				}
				try
				{
					/******************************************
					* Read data from the file
					*******************************************/
					$file = fopen( $filename, "r" ); // opens the file
					if( $file == false ) // checks to make sure the file was opened
					{
					   echo ( "Error in opening file" );
					   exit();
					}
					$i = 0;  // use to increment array position in the loop
					while (!feof($file))
					{
						$contents[$i++] = fgetcsv($file);
					}
					if (DEBUG)
					{
						echo "Dump of fgetcsv generated array in " . __FUNCTION__ . br;
						print_r($contents);
					}
					return $contents;
				}
				catch (Exception $ex)
				{
					// execution transfer to the catch block here
					echo "Error in fileread.php " . $ex->getMessage();
				}
			}
		?>  
</body>
</html>
