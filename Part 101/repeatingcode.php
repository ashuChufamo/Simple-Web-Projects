<html>
    <body>
        <?php 
          if ((3+2) == 5) 
          {
                echo "Is the first if statement 3+2 is equal 5";
          }
          echo "<br/>";
          
          if ((3+2)==1) {
                echo "This should never got ouput";
          } elseif ((3+2)==2) {
              echo "This should never got ouput";
          } elseif ((3+2)==4) {
            echo "Is the second if statement, 3+2 does equal 5 should never got ouput";
          } else {
            echo "There is no match in the if ... elseif blocks";
          }
         echo "<br>";
         
         switch ((3+2)) {
                case (1) :
                  echo "This should never got ouput";
                case (2) :
                  echo "This should never got ouput";
                case (4) :
                  echo "This should never got ouput";
                default: 
                    echo "Is the switch statement with no matching case";
         }
        ?>
    </body>
</html>
