<?php 
define("BASE", "http://localhost/classificados");

session_start();

    $dsn = "mysql:dbname=classificados;host=localhost";
    $dbuser = "root";
    $dbpass = "123123";
    $charset = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    global $pdo;
    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

      } catch(PDOException $e) {
        echo "Erro: " . $e->getMessage();
        exit;
    }


?>