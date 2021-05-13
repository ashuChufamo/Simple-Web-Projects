<?php 
   $error="";
  if($_POST){
    
      if(!$_POST['email']){
        $error .="An email address is required.<br>";
      }

       if(!$_POST['content']){
        $error .="The content is required.<br>";
      }

      if(!$_POST['subject']){
        $error .="The subject  is required.<br>";
      }

       if(filter_var($_POST['email'],
        FILTER_VALIDATE_EMAIL) === false){
          $error .="The email address invalid.<br>";
      }
      if($error!=""){
        $error='<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>'.$error.'</div>';
      } else {
        $emilTo="wondimagegn.desta@aait.edu.et";
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $header = "From: ".$_POST['email'];
        if(mail($emailTo, $subject,$content, $headers)){
               $error='<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
        } else {
                $error='<div 
                class="alert
                 alert-danger" 
                 role="alert">
                 <p><strong>
                 There were error(s) 
                 in your form:</strong></p>'.$error.'</div>';
        }
      }

  }
 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>  
  <body>
    <div class="container">
        <h1>Get in touch!</h1>
        <div id="error">
          <?php 
            echo $error;
          ?>

        </div>
        <form method="post" >
          <fieldset class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id='email' placeholder="Enter your email address" required>
            <small class="text-muted">We'll never share your email with anyone else.</small>

          </fieldset>

          <fieldset class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" id='subject'>
          </fieldset>

          <fieldset class="form-group">
            <label for="content">What would you like to ask us ?</label>
           <textarea class="form-control" id="content" name="content" rows="3"></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script type="text/javascript">
    /*
      $("form").submit(
          function (e) {
              e.preventDefault();
              var error="";
              if ($("#email").val() == "") {
                error +="<p>The email field is required. </p>"
              }

              if ($("#subject").val() == "") {
                error +="<p>The subject field is required. </p>"
              }
              if ($("#content").val() == "") {
                error +="<p>The content field is required. </p>"
              }
              if (error!='') {
                 $("#error").html('<div class="alert alert-danger">'+error+'</div>');
              } else{
                $("form").unbind("submit").submit();
              }
             
          }
      );
     */
    </script>
  </body>

</html>