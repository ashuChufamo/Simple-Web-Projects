<html>
    <body>
        <?php 
          for ($i=0;$i<10;$i++) {
            // do something 
            if ($i==2) {
                echo "We are out here<br>";
                break;
            }
            echo "<font size=\"16\" color =\"blue\">$i</font></br>"; 
            // the loop will print values from 0 to 1
          }
          echo "<hr>";
          for ($i=0;$i<10;$i++) {       
            if ($i == 2) 
            {
                echo "Skipping the number 2 <br>";
                continue;
            }
            echo "<font size=\"16\" color=\"blue\">$i</font> <br>"; // the loop will print all the values from 0 to 10 except 2 
          }
          echo "<br>";
          $j=0;
          
          
          while ($j<10) 
          {
                 
                if($j==2) 
                {
                    echo "We're out here!<br>";
                    break;
                }
                echo "<font size=\"16\">$j</font><br>";
                $j++;
          }
		  $array['3020']="M";
		   $array['3021']="B";
		    $array['3022']="A";
 {
	$layoutColor['blue']="#DFFFFD";
      	$layoutColor['red']="#DFFFFD";
	$layoutColor['yellow']="#DFFFFD";

	//$dataRetriver=getListOfEmployee();
			foreach ($layoutColor as $color=> $colorCode) {
				 echo "Color= $color ColorCode=".$colorCode."<br>";
			}
}

$arraySample[]=2;
$arraySample[]=4;

foreach($arraySample as $k=>$value) {

	echo "index=$k and value=$value <br/>";
}
$layoutColor['yellow']="#FFFFFF";

foreach ($layoutColor as $color=> $colorCode) {
				 echo "Color= $color ColorCode=".$colorCode."<br>";
			}

        ?>
    </body> 
</html>
