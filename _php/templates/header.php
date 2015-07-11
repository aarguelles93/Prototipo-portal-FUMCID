<div class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
      </button>
      <a class="navbar-brand" href="/"><img alt="Brand" src="/img/unnamed.png"></a>
    </div>
    <div  id="spyied"  class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
          
        <?php
       
        $pages[0] = '<a href="/home.php">' . NAVBAR_HOME . '</a>';
        //page1
        $pages[1]='<a href="/nosotros/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">' . NAVBAR_US . '</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/nosotros.php#quienes" data-target="#quienes">' . NAVBAR_US_WHO . '</a></li>
            <li><a href="/nosotros.php#mision" data-target="#mision">'. NAVBAR_US_MISSION .'</a></li>
            <li><a href="/nosotros.php#vision" data-target="#vision">'. NAVBAR_US_VISION .'</a></li>
            <li><a href="/nosotros.php#objetivos" data-target="#objetivos">'. NAVBAR_US_OBJECTIVES .'</a></li>
            
          </ul>';
        $pages[2] = '<a href="/aliados.php">'.NAVBAR_ALLIES.'</a>';
        $pages[3] = '<a href="/galeria.php">'.NAVBAR_GALLERY.'</a>';
        $pages[4] = '<a href="/contactenos.php">'.NAVBAR_CONTACT.'</a>';
        
        $count = 0;
        foreach($pages as $page=>$content){
            if($count == 1){
                //en caso que $page sea la pag con dropdown
                $li_str = '<li class="dropdown">';
                if($page == $active_page){
                    $li_str = '<li class="dropdown active">';
                    $pages[1]='<a href="/nosotros/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">' . NAVBAR_US . '</a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#quienes" data-target="#quienes">' . NAVBAR_US_WHO . '</a></li>
                                <li><a href="#mision" data-target="#mision">'. NAVBAR_US_MISSION .'</a></li>
                                <li><a href="#vision" data-target="#vision">'. NAVBAR_US_VISION .'</a></li>
                                <li><a href="#objetivos" data-target="#objetivos">'. NAVBAR_US_OBJECTIVES .'</a></li>
                              </ul>';
                }
            }else{
                //en caso de que $page sea cualquier otra pag
                $li_str = '<li>';
                if($page == $active_page){
                    $li_str = '<li class="active">';
                }
            }
            $li_str .= $content.'</li>';
            print($li_str);
            
            //$count -> Indice de página actual. Sirve para identificar el dropdown
            $count = $count + 1;
        }
        ?>
        
      </ul>
    </div><!--/.navbar-collapse -->
  </div>
</div>