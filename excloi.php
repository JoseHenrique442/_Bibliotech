<?php
   session_start();
   include('./conexao.php');
   
   $NOME = mysqli_real_escape_string($conexao, trim($_POST['comen']));
   
        $sqls = "SELECT TITULO_OBRA from comentarios where DESCRICAO = '{$NOME}'";
        $resultado = mysqli_query($conexao,$sqls);
        $a[0] = 0;
        while($rows = mysqli_fetch_assoc($resultado)){
            $a[0] = $rows;

        }
       $sql = "DELETE FROM comentarios WHERE DESCRICAO = '{$NOME}'"; 
   $result = mysqli_query($conexao, $sql);
     
   $conexao ->close();
   
   header('Location: ./book-page.php?'.$a[0]['TITULO_OBRA'].'');
   exit;
   
   

?>