<?php 
session_start();
include('../conexao.php');


$NOTAA = mysqli_real_escape_string($conexao, trim($_GET['ESTRELA']));

$SQL = mysqli_query($conexao, "Select RANKING from obras where TITULO_OBRA = '{$_SESSION['TITULO_OBRA']}'");
    $nota = mysqli_fetch_assoc($SQL);
    $soma = (int)$nota['RANKING'];

 if($NOTAA == 1){
    
    $soma -= 5;
    $sql = mysqli_query($conexao, "UPDATE obras SET RANKING = '{$soma}' where TITULO_OBRA = '{$_SESSION['TITULO_OBRA']}'");  
 };
 if($NOTAA == 2){
    
    $soma -= 4;
    $sql = mysqli_query($conexao, "UPDATE obras SET RANKING = '{$soma}' where TITULO_OBRA = '{$_SESSION['TITULO_OBRA']}'");  
 };
 if($NOTAA == 3){
  
    $soma += 1;
    $sql = mysqli_query($conexao, "UPDATE obras SET RANKING = '{$soma}' where TITULO_OBRA = '{$_SESSION['TITULO_OBRA']}'");  
 };
 if($NOTAA == 4){
  
    $soma += 4;
    $sql = mysqli_query($conexao, "UPDATE obras SET RANKING = '{$soma}' where TITULO_OBRA = '{$_SESSION['TITULO_OBRA']}'");  
 };

 if($NOTAA == 5){
   
    $soma += 5;
    $sql = mysqli_query($conexao, "UPDATE obras SET RANKING = '{$soma}' where TITULO_OBRA = '{$_SESSION['TITULO_OBRA']}'");  
 };


 $result = mysqli_query($conexao, $sql);
  
$conexao ->close();

header('Location: ../book-page.php?'.$_SESSION['TITULO_OBRA'].'');
exit;
?>