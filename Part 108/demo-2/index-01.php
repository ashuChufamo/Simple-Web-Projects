<?php
header("X-XSS-Protection: 0");
?>
<?php
$name = $_GET['name'];
echo "Welcome $name<br>";
echo "<a href='http://xssattackexamples.com/'>Click to Download</a>";
?>
