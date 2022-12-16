
    <?php
        session_start();
    include('../conexao.php');

    $butun = $_POST['butun'];

    if($butun == 'Enviar'){

    $TIPO = mysqli_real_escape_string($conexao, trim($_POST['TIPO']));
    $NUM_SERIE = mysqli_real_escape_string($conexao, trim($_POST['NUM_SERIE']));
    $AUTORES = mysqli_real_escape_string($conexao, trim($_POST['AUTORES']));
    $TRADUTORES = mysqli_real_escape_string($conexao, trim($_POST['TRADUTORES']));
    $TITULO_OBRA = mysqli_real_escape_string($conexao, trim($_POST['TITULO_OBRA']));
    $SUBTITU_OBRA = mysqli_real_escape_string($conexao, trim($_POST['SUBTITU_OBRA']));
    $GENERO = mysqli_real_escape_string($conexao, trim($_POST['GENERO']));
    $EDICAO = mysqli_real_escape_string($conexao, trim($_POST['EDICAO']));
    $ANO_PUBLI = mysqli_real_escape_string($conexao, trim($_POST['ANO_PUBLI']));
    $LUGAR_PUBLI = mysqli_real_escape_string($conexao, trim($_POST['LUGAR_PUBLI']));
    $BIBLIO_PERTE = mysqli_real_escape_string($conexao, trim($_POST['BIBLIO_PERTE']));
    $DESCR_FISICA = mysqli_real_escape_string($conexao, trim($_POST['DESCR_FISICA']));
    $CLASSI = mysqli_real_escape_string($conexao, trim($_POST['CLASSI']));
    $RESUMO = mysqli_real_escape_string($conexao, trim($_POST['RESUMO']));
    $PALAV_CHAVE = mysqli_real_escape_string($conexao, trim($_POST['PALAV_CHAVE']));
    $CAPA_LIVRO = mysqli_real_escape_string($conexao, trim($_FILES['CAPA_LIVRO']['name']));
    $LINK_ELETRO = mysqli_real_escape_string($conexao, trim($_POST['LINK_ELETRO']));
    $LINK_EBOOK = mysqli_real_escape_string($conexao, trim($_POST['LINK_EBOOK']));
    $NUM_LIVRO = mysqli_real_escape_string($conexao, trim($_POST['NUM_LIVRO']));
    
    
    $sql = "INSERT INTO obras (TIPO, NUM_SERIE, AUTORES, TRADUTORES, TITULO_OBRA, SUBTITU_OBRA, GENERO, EDICAO, ANO_PUBLI, LUGAR_PUBLI, BIBLIO_PERTE, DESCR_FISICA, CLASSI, RESUMO, PALAV_CHAVE, CAPA_LIVRO, LINK_ELETRO, LINK_EBOOK, NUM_LIVRO, DATA) VALUES ('$TIPO','$NUM_SERIE', '$AUTORES', '$TRADUTORES', '$TITULO_OBRA', '$SUBTITU_OBRA', '$GENERO', '$EDICAO', '$ANO_PUBLI', '$LUGAR_PUBLI', '$BIBLIO_PERTE', '$DESCR_FISICA', '$CLASSI', '$RESUMO', '$PALAV_CHAVE', '$CAPA_LIVRO', '$LINK_ELETRO', '$LINK_EBOOK', '$NUM_LIVRO', NOW())";
    
   $result = mysqli_query($conexao, $sql);

   $ulid = mysqli_insert_id($conexao);

   $_UP['pasta'] = './imagens/'.$ulid.'/';
   mkdir($_UP['pasta'], 0777);

   move_uploaded_file($_FILES['CAPA_LIVRO']['tmp_name'],$_UP['pasta'].$CAPA_LIVRO);


   
  
    $conexao ->close();
    
   header('Location: ./obra.php');
     exit;
    }
    else{
        header('Location: ./editar-obra.php');
     exit;
    }




        ?>

