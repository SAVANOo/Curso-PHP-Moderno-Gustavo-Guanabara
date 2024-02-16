<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Aleatorios</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <section>
        <h1>Números Aleatorios</h1>
        <?php
        $num = rand(0, 100);
        echo "<h3>O seu número aleatório é $num</h3>";
        ?>
        <button onclick="location.reload()">Gerar outro Número</button>
    </section>

</body>

</html>