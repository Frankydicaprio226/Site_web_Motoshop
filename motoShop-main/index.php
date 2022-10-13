<?php

require("config/commandes.php");

  $Produits=afficher();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <b> <title>  Gestionnaire de stocks de cyclomoteurs  </b>  </title>  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


 


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }



  body, html {
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Raleway', sans serif; 
background-color: grey;

}






body {
  background-image: url("images/suzuki1.png");
  background-position: center;
 

}











</style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">A propos</h4>
          <p class="text-muted">  <b> Bienvenue sur notre plateforme Motoshop permettant la gestion de cyclomoteurs de marques diverses </b> </p>
        </div>
        <!--
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Sign in</h4>
          <ul class="list-unstyled">
            <li><a href="login.php" class="text-white">Se connecter</a></li>
-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>MotoShop</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>


<div class="col-sm-4 offset-md-1 py-4">
        
          <ul class="list-unstyled">
           


            <?php
session_start();



if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
        header("Location: admin/afficher.php");
    }
}



?>








            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login - MotoShop</title>
</head>
<body>
<br>
<br>
<br>
<br>

<!---Login--->


<div class="container" style="display: flex; justify-content: start-end">
    <div class="row">
        <div class="col-md-10">

        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Login</label>
                <input type="email" name="email" class="form-control" style="width: 350%;" >
            </div>
            <div class="mb-3">
                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="password" name="motdepasse" class="form-control" style="width: 350%;">




            </div>
            <br>
            <input type="submit" name="envoyer" class="btn btn-info" value="Se connecter">




            <footer>

<div class="footer"> </div>

<p>Copyright 2022 Motoshop website Tous les droits reservés </p>
 
</footer>   

<style>
 .footer{
   color: blue;
   height:300px;
   margin-top: 500px;
   
 }
 

</style>




        </form>

        </div>
    </div>
</div>
 
</body>
</html>

<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $login = htmlspecialchars(strip_tags($_POST['email'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getAdmin($login, $motdepasse);

        if($admin){
            $_SESSION['xRttpHo0greL39'] = $admin;
            
        }else{
            header('Location: index.php');
        }
    }

}

?>




  </body>
</html>
