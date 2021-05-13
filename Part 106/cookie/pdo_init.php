<?php
			$config = parse_ini_file("appconfig.ini", 1);
			$myUser = $config['mysql_database']['db_username'];
			$myPass = $config['mysql_database']['db_password'];
			$myDB = $config['mysql_database']['database'];
			$myServer = $config['mysql_database']['db_host'];		
			// Use PDO to create connection
			// $dbh = new PDO("mysql:server=$myServer;database=$myDB, $myUser, $myPass"); 
			// $dbh = new PDO("mysql:host=$myServer;dbname=$myDB", $myUser, $myPass);
			// $dbh->setFetchMode(PDO::FETCH_ASSOC);


			try {
				$dbh = new PDO("mysql:host=$myServer;dbname=$myDB", 
				$myUser, $myPass);
				$dbh->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION);
				
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}			
?>