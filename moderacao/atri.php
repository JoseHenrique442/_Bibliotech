<?php 
session_start();
include('../conexao.php');

$NOME = mysqli_real_escape_string($conexao, trim($_POST['NOME']));
$FUNCAO = mysqli_real_escape_string($conexao, trim($_POST['FUNCAO']));


if($FUNCAO == 'mod'){
$sql  = "UPDATE usuarios SET PERM = 1 where NOME = '{$NOME}'";
}else{
$sql = "UPDATE usuarios SET PERM = 0 where NOME = '{$NOME}'";    
}
$result = mysqli_query($conexao, $sql);
  
$conexao ->close();

header('Location: ./usuarios.php');
exit;

?>