<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <section>
        <h1>Antecessor e Sucessor</h1>
        <?php
        if (!isset($_GET["num"])) {
            echo "<h3>Aconteceu algo inesperado, nenhum numero foi recebido, retorne ao inicio.</h3>";
        } else {
            $num = $_GET["num"];
            $sucessor = $num + 1;
            $antecessor = $num - 1;

            echo "<h2>O numero escolhido foi $num</h2>
        <h3>Seu sucessor é $sucessor</h3>
        <h3>Seu antecessor é $antecessor</h3>";
        }
        ?>
        <button onclick="voltar()">Voltar</button>
    </section>

</body>

</html>