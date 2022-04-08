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
        <h3 class="text-center bg primary">Lista de <?php echo $perfil;?> </h3><a class="text float-right" href="admCRUD.PHP">voltar</a>

        <?php
        $sql = "select * from usuario WHERE perfil= '$perfil'";

        $result = mysqli_query($con,$sql);
        $totalRegistro = mysqli_num_rows($result);

        if($totalRegistro > 0){
            echo "Total: ".$totalRegistro." registros";
           ?>
           <table table class="table table-striped my-3">
               <tr>
                   <th>id</th>
                   <th>nome</th>
                   <th>sobrenome</th>
                   <th>login</th>
                   <th>email</th>
                   <th>perfil</th>
               </tr>
            <?php
            while($linha = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $linha["idUser"]?></td>
                    <td><?php echo $linha["nome"]?></td>
                    <td><?php echo $linha["sobrenome"]?></td>
                    <td><?php echo $linha["login"]?></td>
                    <td><?php echo $linha["email"]?></td>
                    <td><?php echo $linha["perfil"]?></td>
                </tr>
          
           
            <?php
            }
            ?></table><?php  
        }else{
            echo"Não existe usuário cadastrado"; 
        }
        mysqli_close($con);
        ?>

    </div>
</body>
</html>