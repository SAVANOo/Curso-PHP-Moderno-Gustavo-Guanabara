<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisao</title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <?php
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;
    if ($divisor != 0) {
        $resto = $dividendo % $divisor;
        $resultado = intdiv($dividendo, $divisor);
    };
    ?>

    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo (Numero a ser divido)</label>
            <input type="number" name="dividendo" value="<?= $dividendo ?>" required>
            <label for="divisor">Divisor (Numero que dividirá)</label>
            <input type="number" name="divisor" required value="<?= $divisor ?>">
            <input type="submit" value="Dividir">
        </form>
    </section>
    <?php
    if (isset($_GET['dividendo']) && isset($_GET['divisor'])) {
        echo "<section>
            <h1>Resultado</h1>";
        if ($divisor == 0) {
            echo "<h3> Não é possivel dividir por 0</h3>";
        } elseif (isset($resultado)) {
            echo "<h3>O resultado da divisão inteira de $dividendo por $divisor é $resultado com resto $resto</h3>";
        };
        echo "</section>";
    };
    ?>
</body>

</html>