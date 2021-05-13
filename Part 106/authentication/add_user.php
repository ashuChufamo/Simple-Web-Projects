<?php
			if ((!$_POST['first_name']) || (!$_POST['last_name']) || 
			(!$_POST['username']) || (!$_POST['password'])) {
					header("Location:show_user.html");
					exit;
			}
			
			$config = parse_ini_file("appconfig.ini", 1);
			$myUser = $config['mysql_database']['db_username'];
			$myPass = $config['mysql_database']['db_password'];
			$myDB = $config['mysql_database']['database'];
			$myServer = $config['mysql_database']['db_host'];		
			
			try {
				$dbh = new PDO("mysql:host=$myServer;dbname=$myDB", 
				$myUser, $myPass);
				$dbh->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION);

			     $username=$_POST['username'];
			     $password=md5(filter_var($_POST["password"], FILTER_SANITIZE_STRING));
			     $firstName=$_POST['first_name'];
			     $lastName=$_POST['last_name'];
			    $sql="insert into users (username,password,first_name,last_name) values ('$username','$password',
'$firstName','$lastName');";
				
				$results = $dbh->query($sql);
				
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}			
?>
