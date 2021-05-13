<html>
    <body>
       <?php 
        require_once('./requires.php');
        if(DEBUG) 
        {
            echo "Script execution beginning".__FILE__.":".__FUNCTION__.":".__LINE__.br;
        }
        if(LOGGING) 
        {
            $log->logInfo("Script execution beginning".__FILE__.":".__FUNCTION__.":".__LINE__);
        }
        $radius = 42;
        $circumference =0;
        
        if(DEBUG) 
        {
            echo "Calling CircumfereneByValue".br;
        }
            $circumference = CircumferenceByValue(PI,$radius);
            echo "Call-By-Value circumference=$circumference<br>";
            $circumference =0;
         if (DEBUG) {
            echo "Calling CircumferenceByRefernce".br;
            
         }   
         CircumferenceByReference(PI,$radius,$circumference);
         echo "Call-By-Reference circumference".$circumference;
         $circumference = CircumferenceByValue(PI,$radius);
         
         if($circumference == 0) 
         {
                if(DEBUG)
                    echo "Circumference==0!!!".br;
                if(LOGGING) 
                    $log->logError("Value of \$circumference is 0".__FILE__.":".__FUNCTION__.":".__LINE__);
         }
        
         if(LOGGING)
            $log->logInfo("Script execution ending".__FILE__.":".__FUNCTION__.":".__LINE__);
       ?>
    </body>
</html>
