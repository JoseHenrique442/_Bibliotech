<?php 
session_start();
include('../conexao.php');

$NOME = mysqli_real_escape_string($conexao, trim($_POST['NOME']));
$CPF = mysqli_real_escape_string($conexao, trim($_POST['CPF']));
$MATRICULA = mysqli_real_escape_string($conexao, trim($_POST['MATRICULA']));
$EMAIL = mysqli_real_escape_string($conexao, trim($_POST['EMAIL']));
$CURSO = mysqli_real_escape_string($conexao, trim($_POST['CURSO']));
$CAMPUS = mysqli_real_escape_string($conexao, trim($_POST['CAMPUS']));
$TIPO = mysqli_real_escape_string($conexao, trim($_POST['TIPO']));
$SITUACAO = mysqli_real_escape_string($conexao, trim($_POST['situation']));
$SENHA = mysqli_real_escape_string($conexao, trim(md5($_POST['SENHA'])));

$sql = "select count(*) as total from usuarios where CPF = '$CPF'";
$result = mysqli_query($conexao, $sql);
$rows = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ./registro.php');
    exit;
}else{

$sql = "INSERT INTO usuarios (NOME, CPF, MATRICULA, EMAIL, CURSO, CAMPUS, TIPOUS, SITUACAO, SENHA, DATA) VALUES ('$NOME', '$CPF', '$MATRICULA', '$EMAIL', '$CURSO', '$CAMPUS', '$TIPO', '$SITUACAO', '$SENHA', NOW())";

if($conexao->query($sql)=== TRUE){
    $_SESSION['nao_autenticado'] = true;

}
$conexao ->close();

header('Location: ../login/index.php');
exit;
}
?>