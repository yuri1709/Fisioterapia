<?php
session_start();
include 'auth.php';
include_once "conexao.php";


// retirar a decodificação
// base64_decode
$idUser = base64_decode($_GET["idUser"]);

$sql = "delete from usuario where idUser =".$idUser;
if(mysqli_query($con,$sql)){
    $msg = "Cadastro excluído com Sucesso!";
}else{
    $msg = "Erro ao Excluir";
}
mysqli_close($con);
echo "<script>alert('".$msg."');
location.href= 'admCRUD.php';
</script>";
?>
delete * from fisioterapeuta where = .$email