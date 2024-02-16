<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Médias Aritmeticas e Ponderadas</title>
</head>

<body>
    <?php
    $primeiroNumero =  $_GET['primeiroNumero'] ?? 0;
    $segundoNumero =  $_GET['segundoNumero'] ?? 0;
    $pesoPrimeiroNumero = $_GET['pesoPrimeiroNumero'] ?? 1;
    $pesoSegundoNumero = $_GET['pesoSegundoNumero'] ?? 1;

    $mediaAritmetica = ($primeiroNumero + $segundoNumero) / 2;
    $mediaPonderada = (($primeiroNumero * $pesoPrimeiroNumero) + ($segundoNumero * $pesoSegundoNumero)) / 2;

    ?>

    <section>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Primeiro Numero</label>
            <input type="number" name="primeiroNumero" value="<?= $primeiroNumero ?>" step="any" required>
            <label for="numero">Peso do Primeiro Numero</label>
            <input type="number" name="pesoPrimeiroNumero" value="<?= $pesoPrimeiroNumero ?>" step="any" required>
            <label for="numero">Segundo Numero</label>
            <input type="number" name="segundoNumero" value="<?= $segundoNumero ?>" step="any" required>
            <label for="numero">Peso Segundo Numero</label>
            <input type="number" name="pesoSegundoNumero" value="<?= $pesoSegundoNumero ?>" step="any" required>
            <input type="submit" value="Calcular">
        </form>
    </section>

    <?php
    if (isset($_GET['primeiroNumero']) && isset($_GET['pesoPrimeiroNumero']) && isset($_GET['segundoNumero']) && isset($_GET['pesoSegundoNumero'])) {
        echo "<section>
            <h1>Resultado</h1>" . "
                <ul>
                    <li>Media Aritmetica $mediaAritmetica</li>
                    <li>Media Ponderada $mediaPonderada</li>
                </ul>" . "
            </section>";
    };
    ?>
</body>

</html>