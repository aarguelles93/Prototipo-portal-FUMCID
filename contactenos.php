<?php $active_page = 4;
//When POST action is called to send mail
if(isset($_POST['email'])) {
  
 $email_to = "andresau93@gmail.com";
 $email_subject = "Your email subject line";
 
 function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
  }
  
  if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['subject']) ||
    !isset($_POST['message'])) {
    died('We are sorry, but it seems there are several problems with the message. Try again Later.');      
  }
  
  $nombre = $_POST['name']; // required
  $email_from = $_POST['email']; // required
  $asunto = $_POST['subject']; // not required
  $mensaje = $_POST['message']; // required

  $error_message = "";// MUST be blank
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; 

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(strlen($message) < 2) {
    $error_message .= 'The mensaje you entered do not appear to be valid.<br />';
  }
  
  $email_message = "Form details below.\n\n";

  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
  
  $email_message .= "Name: ".clean_string($name)."\n";
  $email_message .= "Email: ".clean_string($email_from)."\n";
  $email_message .= "Subject: ".clean_string($subject)."\n";
  $email_message .= "Message: ".clean_string($message)."\n";
  
  $headers = 'From: '.$email_from."\r\n".

  'Reply-To: '.$email_from."\r\n" .

  'X-Mailer: PHP/' . phpversion();
  
  $success = false;
  if (@mail($email_to, $subject, $email_message, $headers)){
     $success = true;
  } 
  
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
    <!-- PHP file for HEAD -->
    <?php require_once('_php/templates/head.php'); ?>
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- PHP File for Header -->    
    <?php require_once('_php/templates/header.php'); ?>

    
    <div class="container">
        <div class="row">
            <h1 class="text-center">Contactenos</h1>
            <div class="container container-padded">
              <div class="row">
                <h3>Apóyanos</h3>
                <p>Con tus donativos apoyarás directamente a la fundación.</p>
                <p>Estos son los medios mediante los cuales podrás hacerlo:</p>
                <div class="col-lg-6 col-md-6">
                  <h4>Transferencia Bancaria</h4>
                  <ul>
                    <li>Banco Caja Social</li>
                    <li>No. Cuenta: 24049612620</li>
                    <li>Nit: 900797277_8</li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                  <h4>PayPal</h4>
                </div>
              </div>
            </div>
            <div  id="map-container" class="col-lg-12 col-md-12">
              <div id="map-canvas"></div>
            </div>
            <br>
            <div id="contact-container" class="col-lg-12 col-md-12">
              <h2>Escribenos</h2>
                <form id="contactos" role="form" method="POST"><!-- Falta establecer método y parámetros-->
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputSubject" name="subject" placeholder="Asunto">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="message" placeholder="Mensaje"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                  </div>
                </form>
                <?php 
                if($success){
                  echo '<div class="alert alert-success" role="alert"><strong>Message Sent!</strong> We will be in contact with you very soon.</div>';
                }
                ?>
            </div>
            
            
        </div>
    </div> <!-- /container -->        
    
    <!--PHP File for footer -->
    <?php include("_php/templates/footer.php"); ?>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.js"></script>

    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see a blank space instead of the map, this
      // is probably because you have denied permission for location sharing.
      
      var map;
      
      function initialize() {
        var mapOptions = {
          zoom: 10,
          streetViewControl: false
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      
        // Try HTML5 geolocation
        if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = new google.maps.LatLng(position.coords.latitude,
                                             position.coords.longitude);
      
            var infowindow = new google.maps.InfoWindow({
              map: map,
              position: pos,
              content: 'Tú'
            });
      
            map.setCenter(pos);
          }, function() {
            handleNoGeolocation(true);
          });
        } else {
          // Browser doesn't support Geolocation
          handleNoGeolocation(false);
        }
      }
      
      function handleNoGeolocation(errorFlag) {
        if (errorFlag) {
          var content = 'Error: The Geolocation service failed.';
        } else {
          var content = 'Error: Your browser doesn\'t support geolocation.';
        }
      
        var options = {
          map: map,
          position: new google.maps.LatLng(60, 105),
          content: content
        };
      
        var infowindow = new google.maps.InfoWindow(options);
        map.setCenter(options.position);
      }
      
      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
        
  </body>
</html>
