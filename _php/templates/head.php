<?php 
session_start();
require ($_SERVER['DOCUMENT_ROOT'].'/_php/languages/langSelector.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FUMCID
    <?php 
    switch($active_page){
        case 0:
            print(' - ' . NAVBAR_HOME);
            break;
        case 1:
            print(' - ' . NAVBAR_US);
            break;
        case 2: 
            print(' - ' . NAVBAR_ALLIES);
            break;
        case 3:
            print(' - ' . NAVBAR_GALLERY);
            break;
        case 4:
            print(' - ' . NAVBAR_CONTACT);
            break;
        default:
            break;
    }
    ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="favicon.ico"/>

    <link rel="stylesheet" href="/css/bootstrap.css">
    <style>
        body {
            padding-top: 100px;
           
        }
    </style>
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap-social.css">
    <link rel="stylesheet" href="/css/main.css">

    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>