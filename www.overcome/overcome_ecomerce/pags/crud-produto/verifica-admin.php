<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['login'] !== 'login_admin') {
    header("Location: ../../index.php");
    exit();
}
?>