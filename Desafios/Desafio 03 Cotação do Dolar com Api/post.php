<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moeda</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <section>
        <h1>R$ Reais -> $ Dolar</h1>
        <?php
        if (!isset($_GET["num"])) {
            echo "<h3>Aconteceu algo inesperado, nenhum numero foi recebido, retorne ao inicio.</h3>";
        } else {
            $url = "https://economia.awesomeapi.com.br/last/USD-BRL";
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            $cotacao = (float) $data['USDBRL']['bid'];
            $reais = number_format($_GET["num"], 2, ",", ".");
            $dolar = number_format(($_GET["num"] / $cotacao), 2, ",", ".");

            echo "<h3>R\$$reais reais em dólar fica: \$$dolar</h3>";
        }
        ?>
        <button onclick="voltar()">Voltar</button>
    </section>

</body>

</html>