<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="./public/css/resert.css">
    <link rel="stylesheet" href="./public/css/global.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<nav class="sidebar">
        <div class="sidebar-item">
            <a href="dashboard.php"><i class="bi bi-grid-1x2"></i></a>
        </div>
        <div class="sidebar-item active">
            <a href="settings.php"><i class="bi bi-gear"></i></a>
        </div>
        <div class="sidebar-item">
            <a href="profile.php"><i class="bi bi-person"></i></a>
        </div>

        <div class="logout-btn">
            <a href="logout.php" class="btn-3">Logout</a>
        </div>
    </nav>
    <div class="container">
        <form action="delete_account.php" method="post">
            <p>Deseja excluir a sua conta?</p>
            <button type="submit" name="delete_account" class="s-1 btn-3"><i class="bi bi-trash"></i> Exluir conta</button>
        </form>
    </div>
</body>
</html>