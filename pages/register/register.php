<?php
    $errors = [];
    $successes = [];
    if(isset($_POST['submit'])){
        if(!empty($_POST['url']) && !empty($_POST['type'])){
            $query = DB::query('INSERT INTO links (link_url, link_type, created_on, accesses_count) VALUES (:link_url, :link_type, :created_on, :accesses_count)', array(':link_url'=>$_POST['url'], ':link_type'=>$_POST['type'], ':created_on'=>time(), ':accesses_count'=>'0'));
            if($query){
                array_push($successes, array('title'=>'Cadastrado com sucesso', 'text'=>'Seu link foi cadastrado com sucesso no banco de dados'));
            }else{
                array_push($errors, array('title'=>'Erro no banco de dados', 'text'=>'Favor tentar novamente'));
            }
        }else{
            array_push($errors, array('title'=>'Dados incompletos', 'text'=>'Favor preencher todos os dados'));
        }
    }
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
        <div class="column middle aligned">
            <img src="assets/img/Aleatoriedade-logo.svg" class="ui fluid image">
            </br>
            <form class="ui form huge" action="#" method="post">
                <div class="required field">
                    <label>Link URL:</label>
                    <input type="text" placeholder="Link URL" name="url">
                </div>
                <div class="required field">
                    <label>Tipo de link:</label>
                    <input type="text" placeholder="Tipo de link" name="type">
                </div>
                <button class="ui button fluid huge black" type="submit" name="submit">Cadastrar Link</button>
            </form>
        </div>
        <div class="column" style="padding: 50px 40px 0 0;">
            <?php 
                if($errors){
                    foreach($errors as $error){
                        echo '<div class="ui negative message"><i class="close icon"></i><div class="header">'.$error['title'].'</div><p>'.$error['text'].'</p></div>';
                    }
                }
                if($successes){
                    foreach($successes as $success){
                        echo '<div class="ui success message"><i class="close icon"></i><div class="header">'.$success['title'].'</div><p>'.$success['text'].'</p></div>';
                    }
                }
            ?>
        </div>
    </div>
        <script src="vendor/jquery/jquery-3.1.1.min.js"></script>
        <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="vendor/semantic-ui/semantic.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="dist/home.js"></script>
    </body>
</html>