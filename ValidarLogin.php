<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValidarLoginFisio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
session_start(); //startando a sessão
// resgate de dados da tela
$login = $_POST["login"];
$senha = $_POST["senha"]; // como o banco de dados está criptografado,temos que criptografar a entrada

//abrindo conexão com o banco
include_once 'conexao.php';

//Montar a instrução para ir ao banco
    //vereficando se o login existe
$sql = "select * from usuario where login = '".$login."' AND senha ='".$senha."'";

$res = mysqli_query($con,$sql); // a var result ta retornando um vetor

if(mysqli_num_rows($res) == 1){
    $row = mysqli_fetch_array($res);
    
    $_SESSION["nome"] = $row["nome"];
     $_SESSION["senha"] = $row["senha"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time(); // guarda o momento exato do login
    $_SESSION['authenticated']=true; //isso aqui é importante para a autenticação
    header("location:direcionar.php");
    //header("location:fisioterapeutaGRUD.php"); //redireciona para outra pagina
    
} else{
    $msg = "Login/Senha Inválidos!";
        header("location:login.php?msg=".$msg);
   
}

?>
</body>
</html>