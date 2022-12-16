<?php 
session_start();
include('../conexao.php');

$NOME = mysqli_real_escape_string($conexao, trim($_POST['NOME']));
$CPF = mysqli_real_escape_string($conexao, trim($_POST['CPF']));
$MATRICULA = mysqli_real_escape_string($conexao, trim($_POST['MATRICULA']));
$EMAIL = mysqli_real_escape_string($conexao, trim($_POST['EMAIL']));
$CURSO = mysqli_real_escape_string($conexao, trim($_POST['CURSO']));
$CAMPUS = mysqli_real_escape_string($conexao, trim($_POST['CAMPUS']));
$TIPO = mysqli_real_escape_string($conexao, trim($_POST['TIPOUS']));
$SITUACAO = mysqli_real_escape_string($conexao, trim($_POST['SITUACAO']));

$sql = "select count(*) as total from usuarios where CPF = '$CPF'";
$result = mysqli_query($conexao, $sql);
$rows = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ./index.php');
    exit;
}else{

$sql = "UPDATE usuarios SET NOME = '{$NOME}', CPF='{$CPF}', MATRICULA='{$MATRICULA}', EMAIL='{$EMAIL}', CURSO='{$CURSO}', CAMPUS='{$CAMPUS}', TIPOUS='{$TIPO}', SITUACAO='{$SITUACAO}' WHERE CPF= '{$_SESSION['CPF']}'";

$result = mysqli_query($conexao, $sql);
  
$conexao ->close();

$_SESSION['NOME'] = $NOME;
$_SESSION['MATRICULA'] = $MATRICULA; 
$_SESSION['EMAIL'] = $EMAIL;
$_SESSION['CURSO'] = $CURSO;
$_SESSION['CAMPUS'] = $CAMPUS;
$_SESSION['TIPO'] = $TIPO;
$_SESSION['SITUACAO'] = $SITUACAO;

header('Location: ./index.php');
exit;
}
?>