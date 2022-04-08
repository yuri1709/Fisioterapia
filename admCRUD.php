<?php
    session_start(); 
    include_once "auth.php";
    include_once "head.php";
    include_once "conexao.php";
  
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="css/admCRUD.css">
</head>
<body>
<section>   
  <div class="container c1">
   <div class="container header"><h2>Painel Admin <a href="sair.php" class="logout"><img src="img/admPainel/logout.png" alt="" width="36px" height="36px"></a> </h2></div> 
    <div class="container painel my-2">
        <form class="form my-2" action="" method="POST"  autocomplete="off">
            <div class="form-group search">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="buscar o nome do usuário"> 
            </div>
            <button type="submit" class="btn btn-primary mx-2 px-2">Buscar</button>
           
            <div class="form-group perfil">
            <!-- <a href="showAllUsuarioGeral.php"><img src="img/admPainel/lupa.png" alt="" width="38px" height="38px"></a> -->
            <select name="perfil" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="1">Fisioterapeuta</option>
            <option value="2">Paciente</option>
            </select>
                <button class="btn btn-outline-info btn-sm" type="submit" formaction="showAllUsuarioGeral.php"><img src="img/admPainel/lupa.png" alt="" width="30px" height="30px"></button>
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
                        echo "<strong><br>Perfil:</strong> ".strtoupper($perfilNome);
                        echo "<br><strong>Nome:</strong> ".$linha["nome"];
                        echo " ".$linha["sobrenome"];
                        echo "<br><strong>Login:</strong> ".$linha["login"];
                        echo "<br><strong>E-mail:</strong> ".$linha["email"];  
                        $idUser = $linha["idUser"];                                             
                    }
                }else{
                    echo"nada foi encontrado";
                }
            ?>
        </div>


       
        
        <div class="container botoes py-4">
            <div class="row text-center">
                <div class="col">
                <a href="criarUsuarioGeral.php">  
                    <button type="button" class="btn btn-success mx-2 px-2">CRIAR</button>
                </a>
                </div>
                <div class="col">
                <a href="editarUsuarioGeral.php?nome=<?php echo base64_encode($nome); ?>&idUser=<?php echo base64_encode($idUser); ?>">
                    <button type="button"  class="btn btn-warning mx-2 px-2">EDITAR</button> 
                </a>
                
                </div>
                <div class="col">
                <a href="excluirUsuarioGeral.php?idUser=<?php echo base64_encode($idUser);?>">
                    <button type="button" onclick="return confirm('Tem certeza que deseja deletar este registro?')" class="btn btn-danger mx-2 px-2">EXLUIR</button>
                </a>
                </div>
           
            </div>
        </div>
        </form>
    </div>
  </div>
</section> 
<section>
   
</section>

  
</body>
</html>