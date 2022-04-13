<?php
session_start();
include 'auth.php';
include_once "conexao.php";


// retirar a decodificação
// base64_decode
$idUser = base64_decode($_GET["idUser"]);
$email = base64_decode($_GET["email"]);
echo"EMAIL".$email;

$sql2 = "DELETE FROM fisioterapeuta WHERE email_user ='$email' ";
if(mysqli_query($con,$sql2)){
    $msg = "Cadastro2 excluído com Sucesso!";
}else{
    $msg = "Erro ao Excluir";
}

$sql = "DELETE FROM usuario WHERE idUser = $idUser";
if(mysqli_query($con,$sql)){
    $msg = "Cadastro excluído com Sucesso!";
}else{
    $msg = "Erro ao Excluir";
}

echo $msg;

/*echo "<script>alert('".$msg."');
location.href= 'admCRUD.php';
</script>";*/
mysqli_close($con);
?>
