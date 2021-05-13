<?php 
   $link = mysqli_connect("localhost","diary","diary","diary");
    if(mysqli_connect_error()){
      die("Database connection error");
    }
?>