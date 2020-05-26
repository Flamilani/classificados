<?php 
if(empty($_SESSION['cLogin'])) {
    header("Location: login.php");
    exit;
}

?>