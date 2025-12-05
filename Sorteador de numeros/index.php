<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
          $min = 0;
          $max = 100;
          $num = mt_rand($min, $max);

          echo "<p>Gerando um número aleatório entre $min e $max: <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">
            🔄 Gerar outro
        </button>
    </main>
</body>
</html>
