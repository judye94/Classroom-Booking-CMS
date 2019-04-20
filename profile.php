<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile | Dashboard</title>

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
          <a class="navbar-brand" href="index.php">Griffith College</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="profile.php">Dashboard</a></li>
            <li><a href="viewBookings.php">Bookings</a></li>
            <li><a href="meetings.php">Meetings</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id ="header">
      <div class="container">
        <div class="row">
            <div class="col-md-10">
              <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>View Your Profile</small></h1>
      </div>
      <div class="col-md-2">
        <div class="dropdown create">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              View Content
             <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
         <li><a href="viewBookings.php">View Bookings</a></li>
          <li><a href="meetings.php">Book meeting</a></li>
         <li><a href="edit.php">Edit Profile</a></li>
       </ul>
      </div>
     </div>
     </div>
     </div>
    </header>

    <!-- BreadCrumbs -->
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Profile</li>
        </ol>
      </div>

    </section>

     <!-- Main Section -->
    <section id = "main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
            <a href="profile.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
              Dashboard
            </a>
            <a href="viewBookings.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  Bookings</a>
            <a href="bookRoom.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Book Now</a>
            <a href="meetings.php" class="list-group-item"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Meetings</a>

           
            </div>

          </div>

           <!-- website overview -->
          <div class="col-md-9">
            <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Website Overview</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>
                    <h4>Users</h4>
                </div>
               </div>



                <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> </h2>
                    <h4>Courses</h4>
                </div>
               </div>

                <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span> </h2>
                    <h4>Rooms</h4>
                </div>
               </div>

                <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> </h2>
                    <h4>Bookings</h4>
                </div>
               </div>
             </div>
            </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
               <div class="panel-heading">
                <h3 class="panel-title">About You</h3>
               </div>
               <div class="panel-body">
               <h2>Profile details will go here</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Footer -->
    <footer id="footer">
      <p>Copyright Griffith Student Timetable, &copy; 2017</p>

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
