<?php
function setLanguage(){
    if (isset($_GET['lang'])){
        // Else, use the GET var for LANG, and then set the SESSION var
        if($_GET['lang']=='pt'){
            require('pt.php');
            $_SESSION['lang']='pt';
        }elseif($_GET['lang']=='es'){
            require('es.php');
            $_SESSION['lang']='es';
        }else{
            require('en.php');
            $_SESSION['lang']='en';
        }
    }
    elseif(isset($_SESSION['lang'])){
        //  First, if lang is set on a SESSION Var, use it
        if($_SESSION['lang']== 'pt'){
            require('pt.php');
        }elseif($_SESSION['lang']=='es'){
            require('es.php');
        }else{
            require('en.php');
        }
    }else{
        // If none of the above are set, work with default english lang
        require('en.php');
    }
    
}

setLanguage();

?>