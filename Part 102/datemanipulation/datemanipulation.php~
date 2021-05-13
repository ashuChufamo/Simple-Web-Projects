<html>
<head>
<title></title>
</head>
<body>
<?php 
    define ('br',"<br>"); // create a constant
    define ("pstart","<p>");
    define ("pend","</p>");

    echo "Before sleep the epoch time is ".time().br;
    sleep(10);
    echo "After sleep the epoch time is ".time().br;
    echo "The current date is:".date("D M j, Y-H:i:s",time()).br;
    echo "The date 1 year, 1 month, 1 day and 1 hour from now is ".date("D M j, Y-H:i:s", strtotime('+1year 1month 1day 1hours',time())).br;
    echo "One week ago the date was".date("D M j, Y-H:i:s",strtotime("7 days ago",time())).br;
    echo "One year ago the date was".date("D M j, Y-H:i:s",strtotime("1 year ago",time())).br;

  echo strtotime("+1 days"), "\n";
    // echo "The epoch time at the start of today was".strtotime("10/31/2014").br; // 00:00:00 
   // echo "The epoch time at 5pm today was".strtotime("10/31/2014 17:00").br;
       
    ?>
</body>
</html>
