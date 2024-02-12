<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um número real</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <section>
        <h1>Analisando um número real</h1>
        <?php
        if (!isset($_GET["num"])) {
            echo "<h3>Aconteceu algo inesperado, nenhum numero foi recebido, retorne ao inicio.</h3>";
        } else {
            $ParteInteira = round($_GET["num"]);
            $ParteDecimal = $_GET["num"] - $ParteInteira;

            echo "  <h2>$_GET[num]</h2>
                    <h3> A parte inteira do número é : $ParteInteira<br>
                    A parte decimal do número é : $ParteDecimal</h3>";
        }
        ?>

        <button onclick="voltar()">Voltar</button>
    </section>

</body>

</html>