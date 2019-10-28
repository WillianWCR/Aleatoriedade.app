<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aleatoriedade.app!</title>
        <link rel="stylesheet" type="text/css" href="vendor/semantic-ui/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="dist/home.css">
    </head>
    <body>
    <div class="ui three column grid" style="height: 100%;">
        <div class="column" style="padding: 50px 0 0 40px;">
            <a class="ui basic black button" href="./">
                <i class="icon angle left"></i>
                Voltar
            </a>
        </div>
        <div class="column center aligned middle aligned">
            <img src="assets/img/Aleatoriedade-logo.svg" class="ui fluid image">
            </br>
            <form class="ui form huge" action="./login" method="post">
                <div class="field">
                    <input type="text" name="username" placeholder="Nome de usuário">
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <button class="ui button fluid huge black" type="submit">Submit</button>
            </form>
        </div>
        <div class="column">
            
        </div>
    </div>
        <script src="vendor/jquery/jquery-3.1.1.min.js"></script>
        <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="vendor/semantic-ui/semantic.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="dist/home.js"></script>
    </body>
</html>