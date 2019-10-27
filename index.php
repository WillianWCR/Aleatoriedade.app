<?php
    require_once('db.php');

    $url = strtolower($_GET['url']);
    echo $url;

    if($url == 'random'){

    }else{
        require_once('home.php');
    }
?>