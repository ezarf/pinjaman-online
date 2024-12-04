<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../user/login.php');
    exit;
}
