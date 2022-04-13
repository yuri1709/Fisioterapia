<?php
session_start();
include_once "conexao.php";
include_once "auth.php";

$cpf = $_POST["cpf"];
$crefito = $_POST["crefito"];
$dataNasci = $_POST["dataNasci"];
$sexo = $_POST["sexo"];

$email = $_SESSION["email"]; //pegando o email para inserir na tabela fisioterapeuta
//inserindo dados na tabela
$sql = "insert into fisioterapeuta values(null,'".$cpf."', '".$crefito."', '".$dataNasci."', '".$sexo."', '".$email."')";
$result = mysqli_query($con,$sql);
if($result){
    ?>
    <script>
        alert("Cadastro fisioterapeuta realizado com sucesso!");
        window.location.href="criarUsuarioEndereco.php";//temporario, mudar depois!
    </script>
    <?php
     mysqli_close($con);
} else{
    ?>
    <script>
        alert("Erro ao realizar o cadastro!");
        window.location.href="criarUsuarioFisio2.php";
    </script>
    <?php
}
?>