<?php $active_page = 3; ?>
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
        <div class="content-padded">
            <h1 class="text-center">Galeria</h1>
            <br>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="//www.youtube.com/embed/hZcPSow0Aus?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        
    </div> <!-- /container -->   
    
    <div class="content-padded" style="background-color:#008CCF;">
      <div class="container">
        <h2 class="text-right">Videos</h2>
        
          <div class="col-lg-4 col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="//www.youtube.com/embed/hZcPSow0Aus?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="//www.youtube.com/embed/hZcPSow0Aus?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          
          
      </div>
    </div>
    <div class="content-padded">
      <div class="container">
        <h2 class="text-left">Imagenes</h2>
         <div class="col-lg-6 col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate molestie justo, quis tristique neque sodales non. Aenean eget justo ipsum. Cras at libero pretium, pulvinar odio a, aliquet justo. Donec mattis mauris id sagittis dignissim. Maecenas eleifend lacinia posuere. </p>
        </div>
        <div class="row col-lg-6 col-md-6">
          <div class="col-xs-6 col-sm-3  col-md-4">
            <a href="#" class="thumbnail">
              <img src="http://sgardnerandco.com/wp-content/uploads/2013/10/OISC_logo.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-sm-3  col-md-4">
            <a href="#" class="thumbnail">
              <img src="http://sgardnerandco.com/wp-content/uploads/2013/10/OISC_logo.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-sm-3  col-md-4">
            <a href="#" class="thumbnail">
              <img src="http://sgardnerandco.com/wp-content/uploads/2013/10/OISC_logo.jpg" alt="...">
            </a>
          </div><div class="col-xs-6 col-sm-3  col-md-4">
            <a href="#" class="thumbnail">
              <img src="http://sgardnerandco.com/wp-content/uploads/2013/10/OISC_logo.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-sm-3  col-md-4">
            <a href="#" class="thumbnail">
              <img src="http://sgardnerandco.com/wp-content/uploads/2013/10/OISC_logo.jpg" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-sm-3  col-md-4">
            <a href="#" class="thumbnail">
              <img src="http://sgardnerandco.com/wp-content/uploads/2013/10/OISC_logo.jpg" alt="...">
            </a>
          </div>
          
          
        </div>
      </div>
    </div>
    
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
    
      
    </body>
</html>
