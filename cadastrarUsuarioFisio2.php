<?php
include_once "conexao.php";

$cpf = $_POST["cpf"];
$crefito = $_POST["crefito"];
$dataNasci = $_POST["dataNasci"];
$sexo = $_POST["sexo"];

//inserindo dados na tabela
$sql = "insert into fisioterapeuta values('".$cpf."', '".$crefito."', '".$dataNasci."', '".$sexo."')";
$result = mysqli_query($con,$sql);
if($result){
    ?>
    <script>
        alert("Cadastro fisioterapeuta realizado com sucesso!");
        window.location.href="index.php";//temporario, mudar depois!
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