<?php
    session_start(); 
    switch ($_SESSION["perfil"]){
        case "adm":
            header("location:admCRUD.php");
            break;
        case "medico":
            header("location:fisioterapeutaCRUD.php");
            break;    
    } 
?>