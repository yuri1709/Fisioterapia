<?php
  session_start();
  include 'auth.php';
  $login = base64_decode($_GET["email"]);
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>bem vindo</h2>
  <?php
   echo $login;
  ?>
</body>
</html>