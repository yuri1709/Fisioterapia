<?php
    session_start(); 
    include_once "auth.php";
    include_once "conexao.php";
    if ($_SESSION['perfil']=='0'){}else{header('Location: http://localhost/Fisioterapia/login.php');exit;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admCRUD.css">
    <title>Fisioterapeuta</title>
    <style>
        .c1{
        padding-bottom:80px;
        }
       .c2{
        padding-top:500px;
       }
       .logout{
          float:right;
       }
    </style>


<?php include_once "head.php";?>
</head>
<body>
<section>  
  <div class="container c1 ">
   
  <div class="container header"><h2>Painel Admin <a href="sair.php" class="logout"><img src="img/admPainel/logout.png" alt="" width="36px" height="36px"></a> </h2>
  </div>   
    <div class="container painel my-2">
        
        <form class="form my-2" action="" method="POST"  autocomplete="off">
            <div class="form-group col-md-4 search">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="buscar o nome do usuário"> 
            </div>
            <button type="submit" class="btn btn-primary col-md-1 mx-2 px-2">Buscar</button>
           
            <div class="form-group perfil float-right">
                <!-- <a href="showAllUsuarioGeral.php"><img src="img/admPainel/lupa.png" alt="" width="38px" height="38px"></a> -->
                <select name="perfil" class="form-select form-select-lg mb-3 col-md float-right" aria-label=".form-select-lg example">
                <option value="1">Fisioterapeuta</option>
                <option value="2">Paciente</option>
                </select>
                <button class="btn btn-outline-info btn-sm col-md-4 float-right" type="submit" formaction="showAllUsuarioGeral.php"><img src="img/admPainel/lupa.png" alt="" width="30px" height="30px"></button>
            </div>
          
        <!--Mostrar resultado da pesquisa-->
        <div class="container resultado">
        <?php 
        
                $nome = $_POST["nome"]?? "";  //esse ?? é um operador
                $sql = "select * from usuario WHERE nome ='$nome'";
                $result = mysqli_query($con,$sql);
               
                if(mysqli_num_rows($result)>0){
                    while($linha = mysqli_fetch_array($result)){
                       switch($linha["perfil"]){case '0':$perfilNome = "Administrador";break;case '1':$perfilNome = "Fisioterapeuta";break;case '2':$perfilNome = "Paciente";break;}
                        echo "<br><strong>Nome completo:</strong> ".$linha["nome"];
                        echo " ".$linha["sobrenome"];
                        echo "<strong><br>Perfil:</strong> ".strtoupper($perfilNome);                       
                        echo "<br><strong>Login:</strong> ".$linha["login"];
                        echo "<br><strong>E-mail:</strong> ".$linha["email"];  
                        $idUser = $linha["idUser"];
                        $email = $linha["email"];                                            
                    }
                }else{
                    echo"nada foi encontrado";
                }
            ?>
        </div>
   
    </div>   <!--Div do container painel-->
   </div> <!--div do container c1-->
         <div class="container botoes py-4">
            <div class="row text-center">
                <div class="col">
                <a href="criarUsuarioGeral.php"style="text-decoration:none">  
                    <button type="button" class="btn-block btn-success btn-sm">CRIAR</button>
                </a>
                </div>
                <div class="col">
                <a href="editarUsuarioGeral.php?nome=<?php echo base64_encode($nome);?>&idUser=<?php echo base64_encode($idUser); ?>"style="text-decoration:none">
                    <button type="button"  class="btn-block btn-warning btn-sm">EDITAR</button> 
                </a>
                
                </div>
                <div class="col">
                <a href="excluirUsuarioGeral.php?idUser=<?php echo base64_encode($idUser);?>&email=<?php echo base64_encode($email);?>" style="text-decoration:none">
                    <button type="button" onclick="return confirm('Tem certeza que deseja deletar este registro?')" class="btn-block btn-danger btn-sm">EXLUIR</button>
                </a>
                </div>
            </div>
         </div>
        </form> 
</section> 
</body>
</html>