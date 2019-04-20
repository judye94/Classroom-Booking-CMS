<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $faculty = mysqli_real_escape_string($con, $_POST['faculty']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(name,email,password,title,faculty,location,image) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "','" . $title . "',
                 '" . $title . "','" . $faculty . "','" . $location . "','" . $image . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Account Registration | Griffith Booking </title>

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

              <h1 class="text-center"> Booking System <small> Account Registration</small></h1>
            </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform" class="well">

                  <div class = "form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder= "Enter Full Name..." required value="<?php if($error) echo $name; ?>" />
                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php if($error) echo $email; ?>" class="form-control" placeholder="test@example.com" required />
                     <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                     <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                  </div>

                   <div class="form-group">
                    <label> Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                    <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                  <div class = "form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="<?php if($error) echo $title; ?>" class="form-control" placeholder="Lecturer" required>
                  </div>

                  <div class = "form-group">
                    <label>Faculty
                    <select>
                        <option>Business</option>
                        <option>Computing</option>
                        <option>Design</option>
                        <option>Engeneering</option>
                        <option>Fashion</option>
                        <option>Law</option>
                        <option>Music and Multimedia</option>
                        <option>Springboard</option>
                    </select>
                    </label>
                  </div>

                   <div class = "form-group">
                    <label>Location
                    <select>
                        <option>Griffith College Dublin</option>
                        <option>Griffith College Limerick</option>
                    </select>
                    </label>
                  </div>

                   <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" class="form-control" required>
                  </div>


                  <button type="submit" name="signup" value="signup" class="btn btn-default btn-block">Register</button>

                   <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                   <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
              </form>
          </div>
        </div>

         <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
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
