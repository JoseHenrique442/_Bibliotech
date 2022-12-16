<?php
include('login/verificar.php');
session_start();
$nivel = "select PERM as nivel from usuarios where CPF = '$CPF'"

?>