<?php
session_start();
include 'auth.php';
include_once "conexao.php";

//pegando os dados
$idUser = $_POST["idUser"];
$login = $_POST["login"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$perfil = $_POST["perfil"];

//montando a instrução de atualizar
//insert into usuario values(null,'Administador','','admin','admin123','admin@hotmail.com','adm');
$sql = "update usuario set nome = '".$nome."', sobrenome = '".$sobrenome."', login = '".$login."', email = '".$email."', perfil = '".$perfil."' where idUser = ".$idUser;

$result = mysqli_query($con,$sql);
if($result){
    $msg = "Atualizado com sucesso";
}else{
    $msg = "Erro ao atualizar";
}

//fechar conexão com o banco
mysqli_close($con);
echo "<script>
        alert('".$msg."');
        location.href= 'admCRUD.php';
     </script>";
?>
