<?php

session_start();
include ('../conexao.php');


$CPF = $_SESSION['CPF'];

$query = "SELECT * from usuarios where CPF = '{$CPF}'";
$a = mysqli_query($conexao, $query);
while($dado = mysqli_fetch_assoc($a)){
$_SESSION['NOME'] = $dado['NOME'];
$_SESSION['MATRICULA'] = $dado['MATRICULA']; 
$_SESSION['EMAIL'] = $dado['EMAIL'];
$_SESSION['CURSO'] = $dado['CURSO'];
$_SESSION['CAMPUS'] = $dado['CAMPUS'];
$_SESSION['TIPO'] = $dado['TIPOUS'];
$_SESSION['SITUACAO'] = $dado['SITUACAO'];

}

?>