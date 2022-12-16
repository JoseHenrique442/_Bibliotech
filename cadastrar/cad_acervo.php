
    <?php
        session_start();
    include('../conexao.php');


    $butun = $_POST['butun'];

    if($butun == 'Enviar'){
    $COD = mysqli_real_escape_string($conexao, trim($_POST['COD']));
    $TIPO = mysqli_real_escape_string($conexao, trim($_POST['TIPO']));
    $CLAS = mysqli_real_escape_string($conexao, trim($_POST['CLAS']));
   
    
    $sql = "select count(*) as total from acervo where NOME = '$COD'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if($row['total'] == 1){
        "<script type='javascript'>alert('Código de Acervo já registrado, tente novamente');";
        exit;
    }else{
    
    $sql = "INSERT INTO acervo (NOME, TIPO, CLASS_CDU, DATA) VALUES ('$COD','$TIPO', '$CLAS', NOW())";
    
   $result = mysqli_query($conexao, $sql);
  
    $conexao ->close();
    
   header('Location: ./acervo.php');
     exit;
    }
}

else{
    header('Location: ./editar-acervo.php');
 exit;
}




        ?>