<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
   <?php require_once('_php/templates/head.php'); ?>
   <?php 
      // Remove all session variables- To restore the Lang variable
      session_unset(); 
    ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
         <a class="navbar-brand" href="/"><img alt="Brand" src="img/fumcid-icon.png"></a>
        </div>
        
      </div>
    </div>

  
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>FUMCID</h1>
        <?php
        
        if(!isset($_GET['lang'])){
          $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }else{
           $lang = $_GET['lang'];
        }
        if($lang =="es"){
          ?>
          <h3>Elija su idioma:</h3>
          <?php
        }elseif($lang == "pt"){
          ?>
          <h3>Escolha seu idioma:</h3>
          <?php
        }elseif($lang == "en"){
          ?>
          <h3>Choose your language:</h3>
          <?php
        }else{
          ?>
          <h3>Choose your language:</h3>
          <?php
        }
        ?>   
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <a href="/home.php?lang=pt" class="thumbnail">
              <img src="img/lang/Portugal-icon.png" alt="Portuguese">
            </a>
          </div>
          <div class="col-xs-4 col-md-4">
            <a href="/home.php?lang=en" class="thumbnail">
              <img src="img/lang/UK-icon.png" alt="English">
            </a>
          </div>
          <div class="col-xs-4 col-md-4">
            <a href="/home.php?lang=es" class="thumbnail">
              <img src="img/lang/Spain-icon.png" alt="Spanish">
            </a>
          </div>
        </div>
        
      </div>
    </div>

  
    <?php require("_php/templates/footer.php"); ?>

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
        
        
    </body>
</html>