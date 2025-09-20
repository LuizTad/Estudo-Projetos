<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <form id="formLog" action="inicio.php" method="post" autocomplete="off">
    
    <h1 style="text-decoration: underline;"><i>JOGO DE DADOS</i></h1>


    <h3>Jogador 1</h3>
    <input name="playerName1" type="text" placeholder="Nome">
    <br><br>
    <h3>Jogador 2</h3>
    <input name="playerName2" type="text" placeholder="Nome"><br><br>
    <button name="btn" type="submit">Enviar</button>
     
    </form>
</body>

</html>


<?php
session_start();

$site2 = "<br><h1 class='centralizar'><a href='http://localhost/Estudo-Projetos/Jogo de dados/jogo.php'>Jogar!<h1></a>";

    if(isset($_POST["btn"])){
        if(!empty($_POST["playerName1"] && $_POST["playerName2"])){
            echo "<h3 class='centralizar'>Sejam bem-vindos, <u>{$_POST["playerName1"]}</u> e <u>{$_POST["playerName2"]}</u> !</h3>";
            $_SESSION["player1"] = $_POST["playerName1"];
            $_SESSION["player2"] = $_POST["playerName2"];
            echo $site2;
        }        
        else{
            echo "<h2 id='resultado'>Preencham os nomes, por favor.</h2>";
    }
    }

?>