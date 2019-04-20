<?php
session_start();
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Griffith College | Account Login </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

   
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <img class="img-responsive img-center" src="logo.png" alt="logo" >
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id ="header">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h1 class="text-center"> Booking System <small> Account Login</small></h1>
            </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="index.html" class="well">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-default btn-block">Login</button>
              </form>
          </div>
           <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Don't have an account? <a href="registration.php">Register Here</a>
        </div>
        </div>
      </div>
    </section>

     <!-- Main Section -->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
           

             </div>
        </div>
    </div>
  </section>

     <!-- Footer -->
    <footer id="footer">
      <p>Copyright Griffith College, &copy; 2017</p>

    </footer>

    <script>
            CKEDITOR.replace( 'editor1' );
        </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
