<?php
session_start();
if (!isset($_SESSION)) {
    header('Location: login.php');
    exit;
}
include('protection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/resert.css">
    <link rel="stylesheet" href="./public/css/global.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="main">
        <h1>Olá, <?php echo $_SESSION['nome']; ?>!</h1>
        <p class="s-1">Este é seu dashborad. Em breve terá mais novidades aqui😉</p>

        <div class="app-informations">
            <p class="s-1">Projeto de cadastro e login de usuários que está em andamento, criado para fins de estudos. <br> As informações detalhadas dessa aplicação estão disponíveis no meu <a href="https://github.com/luis-domingues">Github</a> e <a href="https://www.linkedin.com/in/luis-paulo-domingues-653834284/">LinkedIn</a></p>
        </div>

        <a href="logout.php" class="btn-3 s-2"><i class="bi bi-box-arrow-left"></i> Sair da seção</a>
    </div>
</body>

</html>