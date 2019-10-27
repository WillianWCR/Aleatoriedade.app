<?php
    ob_start(); 
    
    $url = 'http://example.com/';
    
    while (ob_get_status()) 
    {
        ob_end_clean();
    }
    
    header( "Location: $url" );
?>