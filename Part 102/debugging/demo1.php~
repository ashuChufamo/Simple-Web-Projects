<html>
    <body>
       <?php 
        require_once('./requires.php');
	    
	if(DEBUG) 
        {
            echo "Script execution beginning ".__FILE__.":".__FUNCTION__.":".__LINE__.br;
        }
        if(LOGGING) 
        {
            $log->logInfo("Script execution beginning".__FILE__.":".__FUNCTION__.":".__LINE__ );
        }
        $radius = 42;
        $cirumference =0;
        
        if(DEBUG) 
        {
            echo "Calling CircumfereneByValue".br;
        }
        $cirumference = CircumferenceByValue(PI,$radius);
        echo "Call-By-Value circumference=$cirumference <br>";
        $cirumference =0;
		if (DEBUG) 
		{
            echo "Calling CircumferenceByRefernce ".br;
		}   
         CircumFerenceByReference(PI,$radius,$cirumference);
         echo "Call-By-Reference cirumference ".$cirumference;
	   ?>
    </body>
</html>
