<?php
if (!isset($_SESSION['authenticated']))//se falso
{
    //if the value was not set, you redirect the user to your login page
        header('Location: http://localhost/Fisioterapia/login.php');
    exit;
}
else // se verdadeiro
{
   //if the user did login, then you load the page normally
}
?>