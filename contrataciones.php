<?php $active_page = 99; //!!! ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?php require_once('_php/templates/head.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php require_once('_php/templates/header.php'); ?>

    
    <div class="container">
        <div class="content-padded">
            <h1 class="text-center">Contrataciones y convenios</h1>
        </div>
    </div> 

    <div class="container container-padded">
      <!-- Example row of columns -->
      <div class="row">
        <div>
          <h2>Como trabajamos?</h2>
          <p class="text-justify">Trabajamos con Asociaciones De Profesionales Sin Fronteras y  Voluntariado Mundial Sin Discriminar Su Genero, Raza, Religión U Origen.</p>
        </div>
        <div>
          <h2>Contratos y convenios</h2>
          <p class="text-justify">FUMCID – ONGD Celebrar Contratos Y Convenios De Asociación Con Entidades Estatales Cuales Sea Su Naturaleza Y De Orden Administrativo En Colombia Acorde Con El Inciso 2 Del Articulo 355 De La Constitución Política Colombiana. En Especial Con Aquellas Entidades Publicas Idóneas Para Gestionar, Orientar Y Coordinar Técnicamente La Cooperación Internacional Publica, Privada, Técnica Y Financiera No Reembolsable Que Reciba Y Otorgue El País; Así Como Ejecutar, Administrar Y Apoyar La Canalización Y Ejecución De Recursos, Programas Y Proyectos De Cooperación Internacional, Atendiendo Los Objetivos De Política Exterior Y El Plan Nacional De Desarrollo. Como La Agencia Presidencial De Cooperación Internacional De Colombia.</p>
       </div>
        <div>
          <p class="text-justify">Así mismo celebra convenios y asociaciones con ong internacionales idóneas a la actividad</p>
        </div>
      </div>
    </div> <!-- /container -->        
    
    <hr>
    
    <?php 
    require_once ($_SERVER['DOCUMENT_ROOT'].'/_php/templates/footer.php');
    ?>
    
    
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
