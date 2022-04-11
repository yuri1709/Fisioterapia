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

//pegando dados do criarUsuarioFisio2
$_SESSION["nome"] = $nome;
$cpf = $_POST['cpf'];
$crm = $_POST['crm'];
//pegando dados do criarUsuarioFisio3
    //aqui será feito a lógica do validar   

    
//validar dados fisio1
if($nome !== "" && $sobrenome !== "" && $login !== "" && $senha !== "" && $email !== "" && $perfil !== "" ){  
    $etapa = $etapa + 1;
    header("location: criarUsuarioFisio2.php");
}else{
    $etapa = 0;
    header("location: criarUsuarioFisio.php");
};

//validar dados fisio2
if($cpf != '' && $crm != '' ){
    $etapa = $etapa + 2;
}else{
    $etapa = 1;
    $_SESSION["nome"] = $nome;
    header("location: criarUsuarioFisio2.php");
}

   



//Julgamento Final
if($etapa == 2){
    $sql = "insert into usuario values(null, '".$nome."', '".$sobrenome."', '".$login."', '".$senha."', '".$email."', '".$perfil."')";
    $result = mysqli_query($con,$sql);
    if($result){
        ?><script> alert("Cadastro realizado com sucesso!")
            window.location.href="index.php";</script><?php
            mysqli_close($con);// fecha a conexão com o banco
    }
}else{
    ?><script>  alert("Favor preencher o formulário corretamente!")
    window.location.href="criarUsuarioFisio.php"</script><?php
    $etapa = 0;
}
?>

