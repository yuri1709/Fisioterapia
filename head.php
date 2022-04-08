<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/jQuery.js"></script>
</head>
<body>
<style>
   #container{
    padding:100px;
  }
  .navbar{
    background: #4682B4;
  }
  .home{
    margin-top:1px;
    margin-left:-3px;
  }
  /* .cristo-logo{
    box-shadow: 10px 10px 5px 12px lightblue;
  } */
</style>

<div id="container">
    <nav class="navbar navbar-dark fixed-top container pb-2">
        <a href="index.php">
        <img 
            src="img/logo/logoCristo.png" 
            class="d-inline-block align-top img-fluid cristo-logo" 
            alt="logo-CristoRedentor" 
            width="100" 
            height="100"/>
         </a>
        <a class="navbar-brand" href="index.php"><h3>FisioRio</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample01">
          <hr>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active common_class">
              <a class="nav-link h5 home" href="index.php"><img src="img/home/homeIcon.png" alt="" width="35px" height="35px"> Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item common_class">
             <a class="nav-link h5" href="login.php"><img src="img/home/loginIcon.png" alt="" width="28px" height="28px"> Login</a>
            </li>
            <li class="nav-item common_class">
              <a class="nav-link h5" href="#contato"><img src="img/home/contatoIcon.png" alt="" width="28px" height="28px"> Contato</a>
            </li>
          </ul>
        </div>
      </nav>
</div>
  <!--BootStrap Script-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>
    