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
    <title>Dashboard</title>
    <link rel="stylesheet" href="./public/css/resert.css">
    <link rel="stylesheet" href="./public/css/global.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="sidebar">
        <div class="sidebar-item active">
            <a href="dashboard.php"><i class="bi bi-grid-1x2"></i></a>
        </div>
        <div class="sidebar-item">
            <a href="settings.php"><i class="bi bi-gear"></i></a>
        </div>
        <div class="sidebar-item">
            <a href="profile.php"><i class="bi bi-person"></i></a>
        </div>

        <div class="logout-btn">
            <a href="logout.php" class="btn-3">Logout</a>
        </div>
    </nav>

    <div class="dashboard-main">
        <div class="contents">
            <div class="greeting-container">
                <div class="text-effect">
                    <h1>Olá, <?php echo $_SESSION['nome']; ?>! <br>
                        <span></span>
                    </h1>
                </div>
            </div>
            <div class="weather-container">
                <div class="form">
                    <div class="form-input-container">
                        <input class="input" type="text" id="city-input" placeholder="Digite sua localização">
                        <button id="search">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
                <div id="weather-data" class="hide">
                    <h2>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span id="city">Temperatura</span>
                    </h2>
                    <p id="temperature"><span></span>&deg;C</p>
                    <div id="description-container">
                        <p id="description"></p>
                        <img src="" alt="Condições climáticas" id="weather-icon">
                    </div>
                    <div id="details-container">
                        <p id="humidity"><i class="bi bi-droplet"></i><span></span></p>
                        <p id="wind"><i class="bi bi-wind"></i><span></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/app.js"></script>
</body>

</html>