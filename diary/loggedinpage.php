<?php
session_start();
if(array_key_exists("id", $_COOKIE)){
	$_SESSION['id']=$_COOKIE["id"];
}
$diarycontent='';
if(array_key_exists("id", $_SESSION) && $_SESSION['id']){
	//echo "Logged In!";
	include("connection.php");
	$query="select diary from users where id=".mysqli_real_escape_string($link,$_SESSION['id'])." LIMIT 1";
	$row=mysqli_fetch_array(mysqli_query($link,$query));
	$diarycontent=$row['diary'];
} else {
	header("Location:index.php");
}
include("header.php");
?>

<nav class="navbar navbar-light bg-faded navbar-fixed-top">
	<a class="navbar-brand" href="#">Secret Diary</a>

	<div class="pull-xs-right">
		 <a href='index.php?logout=1'>
		 <button class="btn btn-success-outline" type="submit">Logout</button></a>
	</div>

</nav>


<div class="container-fluid" id="containerLoggedInPage">
	<textarea id="diarycontent" class="form-control">
		<?php echo $diarycontent;?>
	</textarea>
</div>
<?php
include("footer.php");

?>