<html>
    <body>
       <?php 
        require_once('./function.php');
        $pi = 3.14159;
        $radius = 42;
        $circumference =0;
        
        $circumference = CircumferenceByValue($pi,$radius);
        
        echo "Call-By-Value circumference=$circumference <br>";
        $cirumference = 0;
        CircumferenceByReference($pi,$radius,$circumference);
        echo "call-By-Reference circumference=$circumference"; 
       ?>
    </body>
</html>
