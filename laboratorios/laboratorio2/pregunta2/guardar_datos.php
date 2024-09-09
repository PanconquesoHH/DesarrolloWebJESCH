<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['a'] = $_POST['a'];
    $_SESSION['b'] = $_POST['b'];
    $_SESSION['c'] = $_POST['c']; 
    exit();
}
?>;
