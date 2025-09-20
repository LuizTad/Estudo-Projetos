<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogo de Dados</title>
  <link rel="icon" href="img/DadosIcon.png">
  <link rel="stylesheet" href="styleJogo.css">
</head>

<body>
  <div class="container">
    <?php
    echo "<h2>Vamos jogar, <u>{$_SESSION["player1"]}</u> e <u>{$_SESSION["player2"]}</u>!</h2>";
    ?>

    <form action="jogo.php" method="post">
      <button type="submit" name="btn-rand" class="btn">🎲 Jogar Dados!</button>
    </form><br>

    <?php
    if (isset($_POST["btn-rand"])) {
      $dado1 = rand(1, 6);
      $dado2 = rand(1, 6);

      echo "<div class='resultado'>";
      echo "<div class='linha'><strong>{$_SESSION["player1"]}</strong> tirou <strong><span class='dado'>{$dado1}</span></strong></div>";
      echo "<div class='linha'><strong>{$_SESSION["player2"]}</strong> tirou <strong><span class='dado'>{$dado2}</span></strong></div>";

      if ($dado1 > $dado2) {
        echo "<strong><p class='vencedor'>🏆 {$_SESSION["player1"]} venceu!</p></strong>";
      } elseif ($dado2 > $dado1) {
        echo "<strong><p class='vencedor'>🏆 {$_SESSION["player2"]} venceu!</p></strong>";
      } else {
        echo "<strong><p class='empate'>🤝 Empate!</p></strong>";
      }
      echo "</div>";
    }
    ?>

    <button id="trocarNome" class="btn">🔄 Trocar os nomes</button>
  </div>

  <script>
    document.getElementById("trocarNome").onclick = function () {
      location.href = "inicio.php";
    };
  </script>
</body>

</html>
