<?php
include('../conexao.php');
session_start();

$ex = $_POST['ex'];

if($ex == 'obra'){
 $TITULO_OBRA = mysqli_real_escape_string($conexao, trim($_POST['TITULO_OBRA'])); 

 $sql = ("DELETE FROM obras WHERE TITULO_OBRA = '{$TITULO_OBRA}'");

 $result = mysqli_query($conexao, $sql);
  
$conexao ->close();

header('Location: ./editar-obra.php');
exit;
}if($ex == 'acervo'){
    $TITULO_ACERVO = mysqli_real_escape_string($conexao, trim($_POST['NOME'])); 

 $sql = ("DELETE FROM acervo WHERE NOME = '{$TITULO_ACERVO}'");

 $result = mysqli_query($conexao, $sql);
  
$conexao ->close();

header('Location: ./editar-acervo.php');
exit;
}

elseif($ex == 'edio'){
   $TITULO_OBRA = mysqli_real_escape_string($conexao, trim($_POST['TITULO_OBRA'])); 
   $_SESSION['book'] = $TITULO_OBRA;
header('Location: ./edita-obra.php');
exit;
}

elseif($ex == 'edia'){
   $TITULO_ACERVO = mysqli_real_escape_string($conexao, trim($_POST['ACERVO'])); 
   $_SESSION['acervo'] = $TITULO_ACERVO;
   header('Location: ./edita-acervo.php');
}

?>