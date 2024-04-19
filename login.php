<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu login</title>
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
            <h2 class="p-2">Bem-vindo(a)!</h2>
            <p class="subtitle">insira seu login</p>
            <form action="" method="POST">
                <label for="email" class="s-1">E-mail</label>
                <input type="email" name="email" id="email" class="s-3">
                <br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="s-3">
                <br>
                <input type="submit" value="Entrar" class="s-2 btn-1">
                <br>
                <a href="pass-recovery.php" target="_blank" class="s-1">esqueceu a senha?</a>
            </form>
            <?php
            include('conection.php');

            if (isset($_POST['email']) || isset($_POST['senha'])) {
                if (strlen($_POST['email']) == 0) {
                    echo "Por favor, preencha seu e-mail";
                } else if (strlen($_POST['senha']) == 0) {
                    echo "Por favor, preencha sua senha";
                } else {
                    $email = $conection->real_escape_string($_POST['email']);
                    $senha = $conection->real_escape_string($_POST['senha']);

                    $conn_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                    $conn_query = $conection->query($conn_code) or die("Falha ao executar o código" . $conection->error);

                    $quant = $conn_query->num_rows;
                    if ($quant == 1) {
                        $usuario = $conn_query->fetch_assoc();
                        if (!isset($_SESSION)) {
                            session_start();
                        }
                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['nome'] = $usuario['nome'];

                        header("Location: dashboard.php");
                    } else {
                        echo "Falha de login! E-mail ou senha inseridos estão incorretos.";
                    }
                }
            }
            ?>
        </div>
    </div>

</body>

</html>