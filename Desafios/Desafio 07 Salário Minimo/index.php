<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">

    <title>Salário Minimo</title>
</head>

<body>
    <?php
    $salario =  $_GET['salario'] ?? 0;
    $salariominimo = 1380;
    $qtdsalarios = intdiv($salario, $salariominimo);
    $resto = $salario % $salariominimo;

    ?>

    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" value="<?= $salario ?>" required>
            <?= "<h4>Considerando o salário minimo de R\$$salariominimo</h4>" ?>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <?php
    if (isset($_GET['salario'])) {
        echo "<section>
            <h1>Resultado</h1>
            <h3>" . number_format($salario, 2, ",", ".")  . " reais equivalem a " . $qtdsalarios  . " salários minimos + " . number_format($resto, 2, ",", ".")  . " reais</h3>
            </section>";
    };
    ?>
</body>

</html>