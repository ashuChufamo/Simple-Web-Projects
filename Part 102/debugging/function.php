<?php 
    function CircumferenceByValue($pi,$radius) 
    {
        if(DEBUG) 
        {
           echo "Errorlog: ".__FILE__.":".__FUNCTION__.":".__LINE__.br;
          
        }
        
        if(LOGGING)
        {
            global $log;
            $log->logInfo("Entering ".__FILE__.":".__FUNCTION__.":".__LINE__);
        }
        
        $cirumference = 2*$pi*$radius;
        return $cirumference;
    }
    
    function CircumFerenceByReference($pi,&$radius,&$cirumference) 
    {
     if(DEBUG) 
        {
           echo "Errorlog: ".__FILE__.":".__FUNCTION__.":".__LINE__.br;
           echo '$pi='.$pi.'$radius='.$radius.br;
        }
        
        if(LOGGING)
        {
            global $log;
            $log->logInfo("Entering ".__FILE__.":".__FUNCTION__.":".__LINE__);
        }

      $cirumference = 2 * $pi * $radius; 
    
    }
?>
