<?php
session_start();
include_once "conexao.php";
include_once "auth.php";

$email = $_SESSION["email"]; //pegando o email para inserir na tabela fisioterapeuta

$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$sql = "insert into endereco values(null,'".$cep."', '".$rua."', '".$bairro."', '".$cidade."', '".$uf."')";//adicionar fk_email na tabela
$result = mysqli_query($con,$sql);
if($result){
    ?><script> alert("Cadastro realizado com sucesso!")
    window.location.href="fisioterapeutaCRUD.php";</script> <?php
    mysqli_close($con);// fecha a conexão com o banco VERIFICAR SE ISSO NAO VAI DAR BUG AO LOGAR NO FISIOTERAPEUTA CRUD
}else{
    ?><script>  alert("Erro ao realizar o cadastro!")
    window.location.href="criarUsuarioEndereco.php";</script>
    <?php
}
?>