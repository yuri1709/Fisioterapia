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
$sql = "select * from usuario where login = '".$login."' ";
$res = mysqli_query($con,$sql); // a var result ta retornando um vetor

if(mysqli_num_rows($res) == 1){
    $row = mysqli_fetch_array($res);
    
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time(); // guarda o momento exato do login
    $_SESSION['authenticated']=true; // autenticador recebe true 
    
    if($row["perfil"] == "medico"){
        header("location:direcionar.php");
    } else if($row["perfil"] == "adm"){
        ?><script>  
            alert("Prezado administrador,esta área de login é destinado somente para fisioterapeutas.Você será direcionado para a página de login geral,clique no botão OK para prosseguir.")
            window.location.href="login.php";
          </script>
        <?php
      } else if($row["perfil"] == "paciente"){
        ?><script>  alert("Prezado paciente, esta área é restrita aos fisioterapeutas, para realizar consultas acesse a área do paciente na página principal.");
        window.location.href="index.php";</script>
        <?php   
        }
   
    //header("location:fisioterapeutaGRUD.php"); //redireciona para outra pagina
} else{
    ?><script>  alert("Senha ou usúario inválido!")
    window.location.href="login.php";</script>
    <?php
   
}

?>
</body>
</html>