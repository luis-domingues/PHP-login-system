<?php
include('conection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $conection->real_escape_string($_POST['nome']);
    $email = $conection->real_escape_string($_POST['email']);
    $senha = $conection->real_escape_string($_POST['senha']);

    $insert_query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conection->query($insert_query) === TRUE) {

        header("Location: index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu cadastro</title>
    <link rel="stylesheet" href="./public/css/resert.css">
    <link rel="stylesheet" href="./public/css/global.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="main">
        <div class="arrow">
            <a href="index.php"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="container">
            <h1>Oi!</h1>
            <p class="p-1 subtitle">crie sua nova conta</p>
            <form action="cadastro.php" method="POST">
                <label for="nome" class="s-1">Primeiro nome:</label>
                <input type="text" name="nome" id="nome" class="s-3">
                <br>
                <label for="email" class="s-1">E-mail:</label>
                <input type="email" name="email" id="email" class="s-3">
                <br>
                <label for="senha" class="s-1">Senha:</label>
                <input type="password" name="senha" id="senha" class="s-3">
                <br>
                <input type="submit" value="Cadastrar" class="s-2 btn-1">
            </form>
        </div>
    </div>


</body>

</html>