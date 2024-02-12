<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados</title>
</head>

<body>
    <section>
        <pre>
                <?php
                var_dump($_POST);
                var_dump($_GET);
                var_dump($_REQUEST);
                var_dump($_COOKIE);
                var_dump($_ENV);
                var_dump($_FILES);
                var_dump($_ENV);
                var_dump($_SERVER);
                var_dump($GLOBALS);
                ?>
    </pre>
    </section>
</body>

</html>