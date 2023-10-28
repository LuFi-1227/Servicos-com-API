<?php
session_start();

if(!isset($_SESSION['loginJWT'])){
    header("Location: ./src/view/paginaLogin.php");
}else{
    header("Location: ./src/view/listUsers.php");
}
?>