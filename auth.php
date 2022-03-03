<?php
if (!isset($_SESSION['authenticated']))
{
    //if the value was not set, you redirect the user to your login page
        //header('Location https://www.example.com/login.php');
    exit;
}
else
{
   //if the user did login, then you load the page normally
}
?>