<?php
    session_start();
	$error='';
	if(isset($_GET['logout']) && $_GET['logout']==1){
		unset($_SESSION);
		setcookie("id","",time()-60*60);
		$_COOKIE["id"]="";
	} else if(isset($_SESSION['id']) || isset($_COOKIE['id'])){

		header("Location:loggedinpage.php");

	}
	if(array_key_exists("submit",$_POST)){
		$error="";
		include ("connection.php");

		if(!$_POST['email']){
			$error .="An email address is required!";
		}
		if(!$_POST['password']){
			$error .="A password is required!";
		}

		if($error !=""){
			$error = "<p> There were error(s) in your form!</p>";
		} else {
           if($_POST['signup']){
			$query = "SELECT id FROM users where email='".mysqli_real_escape_string($link,$_POST['email'])."' limit 1";
			print_r($query);
			$result=mysqli_query($link,$query);
			if(mysqli_num_rows($result)>0){
				$error = "That email address is taken";
			} else{
				print_r($query);

				$query="INSERT INTO users (email, password) values ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,md5($_POST['password']))."')";
				 if(!mysqli_query($link,$query)){
				 	$error = "<p>Could not sign you please try agin later</p>";
				 } else {
				 		print_r(mysqli_insert_id($link));
				 	    $query="UPDATE users set password='".md5($_POST['password'])."' where id=".mysqli_insert_id($link)." LIMIT 1";
				 	    mysqli_query($link,$query);
				 	    $_SESSION['id']=mysqli_insert_id($link);
				 	    if($_POST['stayLoggedIn']==1){
				 	    	setcookie("id", mysqli_insert_id($link),time()+60*60*24+365);
				 	    }
				 	//	header("Location:loggedinpage.php");
				 }
			}
		  } else{
		  		$query="select * from users where email='".mysqli_real_escape_string($link,$_POST['email'])."'";
		  		$result=mysqli_query($link,$query);
		  		print_r($query);
		  		$row=mysqli_fetch_array($result);
		  		print_r($row);
		  		if(isset($row['id'])){
		  			$hashedPassword=md5(trim($_POST['password']));
		  			print_r($hashedPassword);
		  			if($hashedPassword==$row['password']){
		  				
		  				$_SESSION['id']=$row['id'];
		  				
		  				if($_POST['stayLoggedIn']==1){
		  					setcookie("id",$row['id'],time()+60*60*24*365);
		  				}
		  				header("Location:loggedinpage.php");

		  			} else {
		  				$error = "That email/password combination could not be found";
		  			}
		  		}else{
		  			$error = "That email/password combination could not be found";
		  		}
		  }
		}

	}
?>
<?php include("header.php");
?>
    <div class="container" id="homepagecontainer">

        <h1>Secret Diary</h1>
        <p><strong>Store your thoughts permanently and securely</p>
        <div id="error">
          <?php 
            if($error!=""){
            	echo '<div class="alert alert-danger">'.$error.'</div>';
            } 
          ?>

        </div>
        
<form method="post" id="signupForm">
	<p>Interested ?  Sign up now.</p>
	<fieldset class="form-group">
		<input type="email" name="email" placeholder="Your email" class="form-control">
	</fieldset>
	<fieldset class="form-group">
		<input type="password" name="password" placeholder="Password" class="form-control">
	</fieldset>
	<div class="checkbox">
		<label>
		<input type="checkbox" name="stayLoggedIn" value="1">
		Stay logged in!
		</label>
		<input type="hidden" name="signup" value="1">
	</div>
	<fieldset class="form-group">
		
		<input type="submit" name="submit"  value="Sign Up!" class="btn btn-success">
	</fieldset>
	<p><a class="toggleForm">Log in</a></p>
</form>

<form method="post" id="loginForm">
	<p>Log in using your username and password</p>
    <fieldset class="form-group">
	<input type="email" name="email" placeholder="Your email" class="form-control">
	</fieldset>
	 <fieldset class="form-group">
	<input type="password" name="password" placeholder="Password" class="form-control">
	</fieldset>
	 <div class="checkbox">
		<label>
		<input type="checkbox" name="stayLoggedIn" value="1">
		Stay logged in!
		</label>
		<input type="hidden" name="signup" value="0">
	</div>
	 <fieldset class="form-group">
		<input type="submit" name="submit"  
	value="Login!" class="btn btn-success">
	</fieldset>
	<p><a class="toggleForm">Sign up!</a></p>
</form>
</div>
<?php 
include("footer.php");
?>