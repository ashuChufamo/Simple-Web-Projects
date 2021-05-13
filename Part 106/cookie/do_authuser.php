<?php
			if ((!$_POST['username']) || (!$_POST['password'])) {
				header("Location: show_login.html");
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
				$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				
				$username=filter_var($_POST["username"], FILTER_SANITIZE_STRING);
				$password=md5(filter_var($_POST["password"], FILTER_SANITIZE_STRING));
			
				  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				
				$results = $dbh->query($sql);
				//get the number of rows in the result set
				$num = $results->rowCount();
				//print a message or redirect elsewhere, based on result          
				if ($num != 0) {
					$cookie_name = "auth";
					$cookie_value = "ok";
					$cookie_expire = "0";
					$cookie_domain = ".webdesignanddevelopment.com";
					setcookie($cookie_name, $cookie_value, $cookie_expire,
					"/" , $cookie_domain, 0);
					$display_block = "
					<p><strong>Secret Menu:</strong></p>
					<ul>
					<li><a href=\"secretA.php\">secret page A</a>
					<li><a href=\"secretB.php\">secret page B</a>
					</ul>";
					
					
				} else {
					header("Location: show_login.html");
					exit;
				}
				
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			
			}			
?>
<HTML>
<HEAD>
<TITLE>Secret Area</TITLE>
</HEAD>
<BODY>
<?php 
	if(isset($display_block)){
	 	echo "$display_block";
	}
 ?>
</BODY>
</HTML>
