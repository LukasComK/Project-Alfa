<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    header('Location: http://projectalfa.com.br/error/errordefault.html');
    die();
  
}


?>