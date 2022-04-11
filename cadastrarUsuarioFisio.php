<?php 
include_once "conexao.php";
session_start();//startando essa session para pegar o nome para mostrar na próxima etapa.
//pegando dados do criarUsuarioFisio
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$perfil = "1";


$sql = "insert into usuario values(null, '".$nome."', '".$sobrenome."', '".$login."', '".$senha."', '".$email."', '".$perfil."')";
$result = mysqli_query($con,$sql);
if($result){
    $_SESSION["email"] = $email;
    ?><script> alert("Cadastro realizado com sucesso!")
    window.location.href="criarUsuarioFisio2.php";</script><?php
    mysqli_close($con);// fecha a conexão com o banco
} else {
    ?><script>  alert("Favor preencher o formulário corretamente!")
    window.location.href="criarUsuarioFisio.php"</script><?php
}
?>

