<?php include('header.php');?>

<?php

  $error='';
  $weather='';
  $city='';
  if(isset($_GET['city'])){
   
    $city=str_replace(' ','-', ucwords($_GET['city']));
    $url="http://www.weather-forecast.com/locations/$city/forecasts/latest/";
    $file_headers=@get_headers($url);
    //check if the file exists

    if($file_headers[0] == "HTTP/1.1 404 Not Found"){
      $error="That city could not be found";

    } else {
      print_r($url);
    print_r($file_headers);
      $forecastPage=file_get_contents($url);
      $pageArray=explode("3 Day Weather Forecast Summary:</b> <span class='read-more-small'><span class='read-more-content'><span class='phrase'>", $forecastPage);
      print_r($pageArray[0]);
      //check if html structure not changed
      if(sizeof($pageArray)>1){
         $secondPageArray=explode("</span></span></span>",$pageArray[1]);
         $weather=$secondPageArray[0];
      } else {
          $error="That city could not be found";
      }
     
    }
  }

/*
// The bove code has limitation when  the  website your access from your code changes its HTML structure then your application is going to break,we will use this option if the website doesnt provide you API if they do use the below code based an implementation for open weather map API 
  if($_GET['city']){
    $urlContent=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city']).",uk&apid=32423443543543252345");

    $weatherArray=json_decode($urlContent,true);
    print_r($weatherArray);
    $weather="The weather in ".$_GET['city']." is currently'".$weatherArray['main']['temp']."'.";
    $tempInCelcious=intval($weatherArray['main']['temp']-273);
    $weather.=" The temperature is".$tempInCelcious."&deg;C and the wind speed is".$weatherArray['wind']['speed']."m/s.";

  }
*/
?>
    <div class="container">
      <h1>What's The Weather ?</h1>
      
      <form>
          <fieldset class="form-group">
            <label for="city">Enter the name of a city</label>
            <input type="city" name="city" class="form-control" id='city' placeholder="Eg. Addis Ababa,Amsterdam, Tokyo">
           
          </fieldset>

          <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
        <div id='weather'>
          <?php 
            if($weather){
              echo '<div class="alert alert-success" role="">'.$weather.'</div>';
            } else if($error){
               echo '<div class="alert alert-danger" role="">'.$error.'</div>';
            }
          ?>
        </div>
    </div>
<?php include("footer.php");?>