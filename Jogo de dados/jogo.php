<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php
    session_start();

    $_SESSION["player1"];
    $_SESSION["player2"];
    echo "<h2>Vamos jogar, <u>".$_SESSION["player1"]."</u> e <u>".$_SESSION["player2"]."</u> !</h2>";
?>


<html lang="pt-BR">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-escale=1.0">
    <title>Jogo de Dados</title>
</head>


<body>
    <form action="jogo.php" method="post">

        <input type="submit" name="btn-rand" value="Jogar dados!">

    </form>




<?php
    $dado1 = rand(0, 10);
    $dado2 = rand(0, 10);

    if(isset($_POST["btn-rand"])){
        echo "<br>Resultado do <strong>".$_SESSION["player1"]."</strong> é: ".$dado1;
        echo "<br>Resultado do <strong>".$_SESSION["player2"]."</strong> é: ".$dado2."<br>";
    }

?>
    <br>
    <input type="submit" value="Trocar os nomes" id="trocarNome">

</body>
</html>

<script type="text/javascript">
    document.getElementById("trocarNome").onclick = function () {
        location.href = "http://localhost/Jogo de dados/inicio.php";
    };
</script>
