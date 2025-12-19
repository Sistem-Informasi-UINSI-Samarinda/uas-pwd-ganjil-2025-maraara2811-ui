<?php
session_start();

if(isset($_SESSION['login'])){
    header("Location: pages/home.php");
} else {
    header("Location: auth/login.php");
}
exit;
