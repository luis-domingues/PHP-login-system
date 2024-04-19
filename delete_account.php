<?php
require_once "conection.php";

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_account'])) {
    $id = $_SESSION['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conection->query($sql) === TRUE) {
        session_destroy();
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao excluir conta: " . $conection->error;
    }
}
$conection->close();
