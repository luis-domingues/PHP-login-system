<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "login";

    $conection = new mysqli($host, $user, $password, $dbname);

    if($conection->connect_error) {
        die("Erro de conexão" . $conection->connect_error); //teste de conexão com a base de dados
    }
?>