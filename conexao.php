<?php
    
    
    define('HOST','127.0.0.1');
    define('USUARIO','root');
    define('SENHA', 'jhaa101105');
    define('DB','bd_users');
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

    
?>