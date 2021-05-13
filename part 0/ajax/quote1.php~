<?php

    /**
     * quote1.php
     *
     * Outputs price of given symbol as text/html.
     *
     * Building Mobile Applications
     * Wondimagegn
     */

    // get quote
    /*
    $handle = @fopen("http://download.finance.yahoo.com/d/quotes.csv?s={
    $_GET["symbol"]}&f=e1l1", "r");
    if ($handle !== FALSE)
    {
        $data = fgetcsv($handle);
        if ($data !== FALSE && $data[0] == "N/A")
            print($data[1]);
        fclose($handle);
    }
    */
	
    $data[1]=25.3;
    if ($_GET["symbol"]=="yahoo") {
        $data[1]=21.3;  
    } else if ($_GET["symbol"]=="google") {
	$data[1]=34.5;
     }
   
    print($data[1]);

?>
