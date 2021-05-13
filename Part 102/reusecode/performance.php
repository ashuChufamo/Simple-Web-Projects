<html>
    <body>
       <?php 
        require_once('./function.php');
        $pi = 3.14159;
        $radius = 42;
        $circumference =0;
        //$iterations = 1000;
         $iterations = 10000000;
	echo time();
        $startValue = new DateTime("now");
        for ($i=0;$i<$iterations;$i++) 
        {
            $circumference = CircumferenceByValue($pi,$radius);
        }
        $endValue = new DateTime("now");
        
        echo "Elapsed time for Call-By-Value=".$endValue->diff($startValue)->format("%H:%i:%s")."<br>";
        $startRef = new DateTime("now");
        for($i=0;$i<$iterations;$i++) 
        {
            CircumFerenceByReference($pi,$radius,$circumference);
        }
        
         $endRef = new DateTime("now");
        
         echo "Elapsed time for Call-By-Reference=".$endRef->diff($startRef)->format("%H:%i:%s")."<br>"; 
       ?>
    </body>
</html>
