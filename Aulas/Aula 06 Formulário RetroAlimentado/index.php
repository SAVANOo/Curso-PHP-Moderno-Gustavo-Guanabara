<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Retroalimentado</title>
</head>

<body>
    <?php
    $numero1 = $_POST['number1'] ?? 0;
    $numero2 = $_POST['number2'] ?? 0;
    ?>

    <section>
        <h1>Somando Números</h1>
        <h2>Exercicio para treinar Formulários retroalimentados</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="number1">Número 1</label>
            <input type="number" name="number1" value="<?= $numero1 ?>" required>
            <label for="number2">Número 2</label>
            <input type="number" name="number2" value="<?= $numero2 ?>" required>
            <input type="submit">
        </form>
    </section>

    <?php if (isset($_POST['number1']) && isset($_POST['number2'])) {
        echo "
        <section>
        <h1>Resultado da soma</h1>
        <h3>O resultado da soma de $numero1 + $numero2 = " . ($numero1 + $numero2) . "</h3>
        </section>";
    }; ?>

</body>

</html>