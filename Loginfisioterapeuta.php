<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form name="login" id="login" action="confirmar.php" method="GET" onsubmit="return validar()">
        <h6>User</h6>
        <input type="text" name="usuario" id="usuario">
        <h6>Senha</h6>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>