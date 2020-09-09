<?php 
session_start();
require_once ("properties.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.13.1-web/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link  rel="icon"   href="img/Logo_vector.png" type="image/png" />
    <title>WhiteEnergy</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="60">
    
    
      <header>
        
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-grad fixed-top">
          <div class="container">
          <a class="navbar-brand text-white" href="index.html"><img src="img/Logo_vector.png" class="logo" alt=""> WhiteEnergy</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link text-white" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.html#section-welcome">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.html#section-functions">Functions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
              <li class="nav-item login ml-md-2 pl-md-1">
                <a class="nav-link text-white" href="#">Acceder</a>
              </li>
            </ul>
            
          </div>
        </div>
        </nav>
      
      </header>
      <div class="container-fluid">
        <div class="container">
          <form method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <input type="email" name="email" id="email" placeholder="Email">
              </div>
              
              <div class="col-12">
                <input type="password" name="password" id="password" placeholder="Contraseña">
              </div>
              <?php
              if($_POST)
              {

                if(empty($_SESSION['user']))
                {

                  $user=$_POST['email'];
                  $password=$_POST['password'];
                  $oMysqli = new Mysqli('localhost','root','','whitener_data');
                 if($oMysqli->connect_errno)
                 {
                   $error = "Se produjo un error con el servidor";
                   
                 }
                 else
                 {

                   $sql = "SELECT * FROM users";
                   $result = $oMysqli->query($sql);

                   while ($row = $result->fetch_assoc()) {
                       if ($row['email'] == $user) {
                           if ($row['password'] == $password) {
                             
                               $_SESSION['user'] = $user;
                               header("Location: admin/home.php");
                               die;
                           } else {
                               $error = "<br> <p class='error'>Usuario o Contraseña incorrecta<p>";
                               
                           }
                       } else {
                           $error = "<br><p class='error'> Usuario o Contraseña incorrecta<p>";
                           
                       }
                   }
                  //  echo $error;
                 }
                 }
                 else{
                  header("Location: admin/home.php");
                 }
              }
                
              ?>
              <div class="col-12">
                <button class="btn btn-energy" type="submit">Entrar</button>
              </div>
            </div>
          </form>
        </div>
      </div>





    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    <script>
      
      $( document ).ready(function() {
        $('body').scrollspy({ target: '#navbar',offset:50 })
      });

      $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
        $(".navbar").addClass("headActive");
        
        } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".navbar").removeClass("headActive");
        
        }
});
    </script>
  
  </body>
</html>