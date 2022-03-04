<?php
session_start(); 
include_once "auth.php";
include_once "conexao.php";

//pegando dados
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$perfil = $_POST['perfil'];

//validar dados
if($nome != "" && $sobrenome != "" && $login != "" && $senha != "" && $email != "" && $perfil != "" ){  
    $sql = "insert into usuario values(null, '".$nome."', '".$sobrenome."', '".$login."', '".$senha."', '".$email."', '".$perfil."')";
    //gravar
    $result = mysqli_query($con,$sql);
    if($result){
        ?><script> alert("Cadastro realizado com sucesso!")
            window.location.href="admCRUD.php";</script>
    <?php
        mysqli_close($con);// fecha a conexão com o banco
    }else{
        ?><script>  alert("Erro ao  realizar o cadastro!")
            window.location.href="criarUsuarioGeral.php";</script>
    <?php
    }
}else{
    ?><script>  alert("Favor preencher o formulário corretamente!")
            window.location.href="criarUsuarioGeral.php";</script>
    <?php
}
?>

