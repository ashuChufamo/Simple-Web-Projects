<?php 
    function CircumferenceByValue($pi,$radius) 
    {
        $cirumference = 2*$pi*$radius;
        return $cirumference;
    }
    
    function CircumFerenceByReference(&$pi,&$radius,
&$cirumference) 
    {
    
      $circumference = 2 * $pi * $radius; 
   
    }
?>
