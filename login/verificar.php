<?php
session_start();
if(!$_SESSION['CPF']){
    header('Location: login/index.php');
    exit();

}
?>