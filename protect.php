<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    header('Location: error/errordefault.html');
    die();
}


?>