<?php
    require_once('db.php');

    $url = strtolower($_GET['url']);

    if($url == 'random'){
        $query = DB::query('SELECT * FROM links ORDER BY RAND() LIMIT 1', array())[0];
        ob_start(); 
    
        $url = $query['link_url'];
        
        while (ob_get_status()) 
        {
            ob_end_clean();
        }
        
        header( "Location: $url" );
    }elseif($url == 'login'){
        require_once('pages/login/login.php');
    }elseif($url == 'register'){
        require_once('pages/register/register.php');
    }else{
        require_once('pages/home/home.php');
    }
?>