<?php
    $linkscount = DB::query('SELECT count(*) FROM links', array())[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aleatoriedade.app!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="vendor/semantic-ui/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="pages/home/home.css">
    </head>
    <body>
        <div class="ui stackable three column grid" style="height: 100%;">
            <div class="column center aligned">
                
            </div>
            <div class="column middle aligned center aligned">
                <img src="assets/img/Aleatoriedade-logo.svg" class="ui fluid image">
                <div class="ui large header">
                    <span style="font-size: 40pt;" class="counter"><?php echo $linkscount[0]; ?></span> </br>links cadastrados
                </div></br>
                <button class="fluid ui black massive button aleatorizar-btn" id="randomizesite"><i class="random icon"></i>Aleatorizar um site!</button>
            </div>
            <div class="column right aligned" style="padding: 50px 40px 0 0;">
                <!--<button class="ui button black basic">Login</button>
                <button class="ui button black">Cadastro</button>-->
            </div>
        </div>
        <script src="vendor/jquery/jquery-3.1.1.min.js"></script>
        <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="vendor/semantic-ui/semantic.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="pages/home/home.js"></script>
    </body>
</html>