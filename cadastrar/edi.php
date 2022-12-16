<?php
        session_start();
    include('../conexao.php');

    $obra = $_SESSION['book'];

   

     $TIPO = mysqli_real_escape_string($conexao, trim($_POST['TIPO']));
    if(!empty($TIPO)){
      $sql = "UPDATE obras SET TIPO='{$TIPO}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    
    $NUM_SERIE = mysqli_real_escape_string($conexao, trim($_POST['NUM_SERIE']));
    if(!empty($NUM_SERIE)){
      $sql = "UPDATE obras SET NUM_SERIE='{$NUM_SERIE}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $AUTORES = mysqli_real_escape_string($conexao, trim($_POST['AUTORES']));
    if(!empty($AUTORES)){
      $sql = "UPDATE obras SET AUTORES='{$AUTORES}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $TRADUTORES = mysqli_real_escape_string($conexao, trim($_POST['TRADUTORES']));
    if(!empty($TRADUTORES)){
      $sql = "UPDATE obras SET TRADUTORES='{$TRADUTORES}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $TITULO_OBRA = mysqli_real_escape_string($conexao, trim($_POST['TITULO_OBRA']));
    if(!empty($TITULO_OBRA)){
      $sql = "UPDATE obras SET TITULO_OBRA='{$TITULO_OBRA}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $SUBTITU_OBRA = mysqli_real_escape_string($conexao, trim($_POST['SUBTITU_OBRA']));
    if(!empty($SUBTITU_OBRA)){
      $sql = "UPDATE obras SET SUBTITU_OBRA='{$SUBTITU_OBRA}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $GENERO = mysqli_real_escape_string($conexao, trim($_POST['GENERO']));
    if(!empty($GENERO)){
    $sql = "UPDATE obras SET GENERO='{$GENERO}' where TITULO_OBRA = '{$obra}'";
    $result = mysqli_query($conexao, $sql);
    };
    $EDICAO = mysqli_real_escape_string($conexao, trim($_POST['EDICAO']));
    if(!empty($EDICAO)){
      $sql = "UPDATE obras SET EDICAO='{EDICAO}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $ANO_PUBLI = mysqli_real_escape_string($conexao, trim($_POST['ANO_PUBLI']));
    if(!empty($ANO_PUBLI)){
      $sql = "UPDATE obras SET ANO_PUBLI='{$ANO_PUBLI}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $LUGAR_PUBLI = mysqli_real_escape_string($conexao, trim($_POST['LUGAR_PUBLI']));
    if(!empty($LUGAR_PUBLI)){
      $sql = "UPDATE obras SET LUGAR_PUBLI='{$LUGAR_PUBLI}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $BIBLIO_PERTE = mysqli_real_escape_string($conexao, trim($_POST['BIBLIO_PERTE']));
    if(!empty($BIBLIO_PERTE)){
      $sql = "UPDATE obras SET BIBLIO_PERTE='{$BIBLIO_PERTE}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $DESCR_FISICA = mysqli_real_escape_string($conexao, trim($_POST['DESCR_FISICA']));
    if(!empty($DESCR_FISICA)){
      $sql = "UPDATE obras SET DESCR_FISICA='{$DESCR_FISICA}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $CLASSI = mysqli_real_escape_string($conexao, trim($_POST['CLASSI']));
    if(!empty($CLASSI)){
      $sql = "UPDATE obras SET CLASSI='{$CLASSI}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $RESUMO = mysqli_real_escape_string($conexao, trim($_POST['RESUMO']));
    if(!empty($RESUMO)){
      $sql = "UPDATE obras SET RESUMO='{$RESUMO}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $PALAV_CHAVE = mysqli_real_escape_string($conexao, trim($_POST['PALAV_CHAVE']));
    if(!empty($PALAV_CHAVE)){
      $sql = "UPDATE obras SET PALAV_CHAVE='{$PALAV_CHAVE}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $LINK_ELETRO = mysqli_real_escape_string($conexao, trim($_POST['LINK_ELETRO']));
    if(!empty($LINK_ELETRO)){
      $sql = "UPDATE obras SET LINK_ELETRO='{$LINK_ELETRO}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $LINK_EBOOK = mysqli_real_escape_string($conexao, trim($_POST['LINK_EBOOK']));
    if(!empty($LINK_EBOOK)){
      $sql = "UPDATE obras SET LINK_EBOOK='{$LINK_EBOOK}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };
    $NUM_LIVRO = mysqli_real_escape_string($conexao, trim($_POST['NUM_LIVRO']));
    if(!empty($NUM_LIVRO)){
      $sql = "UPDATE obras SET NUM_LIVRO='{$NUM_LIVRO}' where TITULO_OBRA = '{$obra}'";
      $result = mysqli_query($conexao, $sql);
    };

   header('Location: ./obra.php');
     exit;
    




        ?>