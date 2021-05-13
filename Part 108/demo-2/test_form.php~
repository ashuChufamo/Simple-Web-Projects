<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 
<?php

header("X-XSS-Protection: 0");
?>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Name: <input type="text" name="name"> <br/>
E-mail: <input type="text" name="email">  <br/>
Website: <input type="text" name="website">  <br/>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>  <br/>	
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<!----
"></form><div style="position: absolute; top: 0px; bottom: 0px; right: 0px; left: 0px; background-color: black; color: white; text-align: center; font-size: 100px;">Hacked :)
<script>alert('xss')</script>
</div>

--->

</body>
</html>
