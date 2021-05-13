<html>
    <body>
        <?php 
            $i=1;
	    $i+=2;// $i=i$+2;
            echo 'This is the value of \$i: $i <br>';
            echo "This is the value of \$i:$i <br>";
            $i= $_SERVER['SERVER_NAME'];
            echo "This is the value of \$_SERVER_NAME:$i <br>";
            
            $i = $_SERVER['SERVER_SOFTWARE'];
            
            echo "This is the value of \$i=SERVER_SOFTWARE $i <br>";
            
            $i = $_SERVER['SERVER_PORT'];
            
            echo "This is the value of \$i=SERVER_PORT: $i <br>";
            
            $i = $_SERVER['REMOTE_ADDR'];
            
            echo "This is the value of \$i=REMOTE_ADDR: $i <br>";
            
            
        ?>
    </body>
</html>
