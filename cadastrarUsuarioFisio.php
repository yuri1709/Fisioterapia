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

//pegando dados do criarUsuarioFisio3
    //aqui será feito a lógica do validar   

//validar dados
if($nome != "" && $sobrenome != "" && $login != "" && $senha != "" && $email != "" && $perfil != ""){  
    $sql = "insert into usuario values(null, '".$nome."', '".$sobrenome."', '".$login."', '".$senha."', '".$email."', '".$perfil."')";
    //gravar
    $result = mysqli_query($con,$sql);
    if($result){
        ?><script> //alert("Cadastro realizado com sucesso!")
            window.location.href="criarUsuarioFisio2.php";</script>
    <?php
        mysqli_close($con);// fecha a conexão com o banco
    }else{
        ?><script>  alert("Erro ao  realizar o cadastro!")
            window.location.href="criarUsuarioFisio.php";</script>
    <?php
    }
}else{
    ?><script>  //alert("Favor preencher o formulário corretamente!")
            window.location.href="criarUsuarioFisio2.php"</script>
    <?php
}
?>

