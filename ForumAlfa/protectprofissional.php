<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_profissional'])) {
    header('Location: http://projectalfa.com.br/error/errordefault.html');
    die();
}


?>