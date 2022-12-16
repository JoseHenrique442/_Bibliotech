
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <?php
include('./conexao.php');

session_start();

$query = "SELECT PERM from usuarios where CPF = '123'";
$a = mysqli_query($conexao, $query);
while($dado = mysqli_fetch_assoc($a)){
$_SESSION['nivel'] = $dado;

print_r($_SESSION['nivel']);
if($_SESSION['nivel']['PERM'] >= 1){
    echo 'yes';
}else{
    echo 'sad';
}
}
 ?>

 </body>
 </html>