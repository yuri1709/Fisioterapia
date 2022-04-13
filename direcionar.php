<?php
    session_start(); 
    switch ($_SESSION["perfil"]){
        case "0":
            header("location:admCRUD.php");
            break;
        case "1":
            header("location:fisioterapeutaCRUD.php");
            break;  
        case "2":
            header("location:pacienteCRUD.php");       
    } 
?>