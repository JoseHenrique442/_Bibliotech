<?php
        session_start();
    include('../conexao.php');

    $acervo = $_SESSION['acervo']; 
    
    $TIPO = mysqli_real_escape_string($conexao, trim($_POST['TIPO']));
    if(!empty($TIPO)){
      $sql = "UPDATE acervo SET TIPO='{$TIPO}' where NOME = {$acervo}";
      $result = mysqli_query($conexao, $sql);
    };
   
    $CLASS_CDU = mysqli_real_escape_string($conexao, trim($_POST['CLAS']));
    if(!empty($CLASS_CDU)){
      $sql = "UPDATE acervo SET CLASS_CDU='{$CLASS_CDU}' where NOME = '{$acervo}'";
      $result = mysqli_query($conexao, $sql);
    };


$COD = mysqli_real_escape_string($conexao, trim($_POST['COD']));
    if(!empty($COD)){
      $sql = "UPDATE acervo SET NOME='{$COD}' where NOME = '{$acervo}'";
      $result = mysqli_query($conexao, $sql);
    };

   
    
    
   header('Location: ./acervo.php');
     exit;
    




        ?>