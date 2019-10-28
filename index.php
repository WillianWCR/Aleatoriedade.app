<?php
    require_once('db.php');

    $url = strtolower($_GET['url']);

    if($url == 'random'){

    }elseif($url == 'login'){
        require_once('pages/login/login.php');
    }elseif($url == 'register'){
        require_once('pages/register/register.php');
    }else{
        require_once('pages/home/home.php');
    }
?>