<?php
    require_once('db.php');

    $url = strtolower($_GET['url']);

    if($url == 'random'){

    }elseif($url == 'admin'){
        require_once('admin.php');
    }else{
        require_once('home.php');
    }
?>