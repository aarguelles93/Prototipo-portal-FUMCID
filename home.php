<?php $active_page = 0; ?>
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

    <!-- Slider to display pictures-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://ihariharan.com/skybrook/wp-content/uploads/2014/04/Clouds-1400x500.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Conocenos</h1>
              <p>Conoce nuestros objetivos y actividades. </p>
              <p><a class="btn btn-lg btn-primary" href="/nosotros.html#quienes" role="button">¿Quiénes somos?</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/img/carrousel/collaborate.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Partners</h1>
              <p>Trabajamos de la mano con organizaciones y empresas. Conócelas.</p>
              <p><a class="btn btn-lg btn-primary" href="/aliados.html" role="button">Aliados</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://fc07.deviantart.net/fs4/i/2004/244/6/8/almost_grass.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="/galeria.html" role="button">Galería</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>FUMCID</h1>
        <p>Fundación Mundial para la Cooperación y el Desarrollo Humano Sostenible Integral.</p>
        <p><a class="btn btn-primary btn-lg" role="button" href="/nosotros.php">Nosotros &raquo;</a></p>
      </div>
    </div>

    <div class="container container-padded">
      <!-- Example row of columns -->
      <div class="row">
        <h2>Proyectos</h2>
        <div class="col-md-4">
          <h3>Convocatorias</h3>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h3>Contrataciones</h3>
          <p>Información sobre las diversas contrataciones y convenios de la fundación</p>
          <p><a class="btn btn-default" href="/contrataciones.php" role="button">Ver detalles &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h3>Donaciones</h3>
          <p>En la página de contacto, podrás contactarte con nosotros y apoyarnos con tus <strong>donativos</strong>.</p>
          <p><a class="btn btn-default" href="/contactenos.php" role="button">Encuentranos &raquo;</a></p>
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
