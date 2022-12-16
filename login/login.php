<?php

session_start();
include ('../conexao.php');

if(empty($_POST['CPF']) || empty($_POST['SENHA'])){
    header('Location: index.html');
    exit();
}
//validações contra InsertSQL
$CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);
$SENHA = mysqli_real_escape_string($conexao, $_POST['SENHA']);
//CPF
$query = "select idusuarios, CPF from usuarios where CPF = '{$CPF}' and SENHA = md5('{$SENHA}')";

//nivel acesso
$querys = "SELECT PERM from usuarios where CPF = '{$CPF}'";
$a = mysqli_query($conexao, $querys);
while($dado = mysqli_fetch_assoc($a)){
$_SESSION['nivel'] = $dado;
}

// dados perfil
$queryy = "SELECT * from usuarios where CPF = '{$CPF}'";
$aa = mysqli_query($conexao, $queryy);
while($dados = mysqli_fetch_assoc($aa)){
$_SESSION['NOME'] = $dados['NOME'];
$_SESSION['MATRICULA'] = $dados['MATRICULA']; 
$_SESSION['EMAIL'] = $dados['EMAIL'];
$_SESSION['CURSO'] = $dados['CURSO'];
$_SESSION['CAMPUS'] = $dados['CAMPUS'];
$_SESSION['TIPO'] = $dados['TIPOUS'];
$_SESSION['SITUACAO'] = $dados['SITUACAO'];
$_SESSION['SENHA'] = $dados['SENHA'];

}


$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
  $_SESSION['CPF'] = $CPF;
  header('Location: ../index.php');
  exit();

}else{
  $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    
    exit();


}

?>