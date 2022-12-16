<?php

        session_start();
    include('./conexao.php');

    $TEXTO = mysqli_real_escape_string($conexao, trim($_POST['TEXTO']));
    $AUTOR = mysqli_real_escape_string($conexao, trim($_SESSION['CPF']));
    $LIVRO = mysqli_real_escape_string($conexao, trim($_SESSION['TITULO_OBRA']));
   
    
    $sql = "INSERT INTO comentarios (DESCRICAO, AUTOR, TITULO_OBRA, DATA) VALUES ('$TEXTO','$AUTOR', '$LIVRO', NOW())";
    
   $result = mysqli_query($conexao, $sql);
  
    $conexao ->close();

    
    header('Location: '.$_SESSION['url']);
     exit;
?>