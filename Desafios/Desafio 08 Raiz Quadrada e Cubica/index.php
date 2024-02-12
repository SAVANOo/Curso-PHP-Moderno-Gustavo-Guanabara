<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculador de Raízes Quadradas e Cubicas</title>
</head>

<body>
    <?php
    $numero =  $_GET['numero'] ?? 0;
    $quadrado = number_format(($numero ** (1 / 2)), 3, ",", ".");
    $cubo = number_format(($numero ** (1 / 3)), 3, ",", ".");
    ?>

    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Numero</label>
            <input type="number" name="numero" value="<?= $numero ?>" step="any" required>
            <input type="submit" value="Calcular">
        </form>
    </section>

    <?php
    if (isset($_GET['numero'])) {
        echo "<section>
            <h1>Resultado</h1>
                <ul>
                    <li>Raiz quadrada $quadrado</li>
                    <li>Raiz cubica $cubo</li>
                </ul>
            </section>";
    };
    ?>
</body>

</html>