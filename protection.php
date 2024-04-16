<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falha ao se conectar</title>
    <link rel="stylesheet" href="./public/css/resert.css">
    <link rel="stylesheet" href="./public/css/global.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
</head>

<body>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['id'])) {
        die("<p>Acesso negado! Faça o login ou cadastre-se para ter acesso.<a href='index.php'>clicando aqui</a></p>");
    }
    ?>
</body>

</html>