<?php
include_once 'head.php';
include_once 'conexao.php';

$perfil = $_POST['perfil'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de usuários</title>
</head>
<body>
    <div class="container">
        <?php switch($perfil){case '1':$perfilNome = "Fisioterapeuta";break;case '2':$perfilNome = "Paciente";break;}?>
        <h3 class="text-center">Lista de <?php echo $perfilNome;?> </h3><a class="text float-right" href="admCRUD.PHP">voltar</a>

        <?php
        $sql = "select * from usuario WHERE perfil= '$perfil'";
        $result = mysqli_query($con,$sql);
        $totalRegistro = mysqli_num_rows($result);

        if($totalRegistro > 0){
            echo "Total: ".$totalRegistro." registros";
           ?>
           <!-- INSERIR FILTER-TABLE -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                });
            </script>
            <br>
            <div class="text-center"><input id="myInput" class="col-md-8" type="text" placeholder="Buscar por registros..."></div>
            <br><br>
        <div class="table-responsive">
           <table table class="table table-striped my-3">
               <tr>
                   <th scope="col">id</th>
                   <th scope="col">nome</th>
                   <th scope="col">sobrenome</th>
                   <th scope="col">login</th>
                   <th scope="col">email</th>
                   <th scope="col">perfil</th>
               </tr>
            <?php
            while($linha = mysqli_fetch_array($result)){
                if($linha["perfil"] == '1'){
                    $linha["perfil"]="Fisioterapeuta";
                }
                ?>
                <tbody id="myTable">
                <tr>
                    <td><?php echo $linha["idUser"]?></td>
                    <td><?php echo $linha["nome"]?></td>
                    <td><?php echo $linha["sobrenome"]?></td>
                    <td><?php echo $linha["login"]?></td>
                    <td><?php echo $linha["email"]?></td>
                    <td><?php echo $perfilNome?></td>
                </tr>
                </tbody>
            <?php
            }
            ?></table>
        </div>
            <?php  
        }else{
            echo"Não existe usuário cadastrado"; 
        }
        mysqli_close($con);
        ?>

    </div>
</body>
</html>