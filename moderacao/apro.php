<?php 
session_start();
include('../conexao.php');

$NOME = mysqli_real_escape_string($conexao, trim($_POST['Sim']));
$DESC =  mysqli_real_escape_string($conexao, trim($_POST['DESC']));

if($NOME == 'aprovado'){
    $sql = "UPDATE comentarios SET APROVADO = 1 where DESCRICAO = '{$DESC}'";    
}else{
    $sql = "DELETE FROM comentarios WHERE DESCRICAO = '{$DESC}'"; 
}
$result = mysqli_query($conexao, $sql);
  
$conexao ->close();

header('Location: ./comentarios.php');
exit;


?>