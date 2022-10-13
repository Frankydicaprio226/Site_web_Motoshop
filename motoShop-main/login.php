<?php
session_start();

include "config/commandes.php";

if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
        header("Location: admin/afficher.php");
    }
}



?>
