<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
           
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <h2>For Students</h2>
    <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
    <hr>
    <h2>For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Login</th>
          <th>Sign Up</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <button class="btn btn-primary pull-right">Login</button>
            </form>
          </td>
          <td>
            <form id="signup">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" placeholder="Name" type="text" name="name">
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" placeholder="Phone" type="text" name="phone">
              </div>
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
                <span class="help-block">Password should be 6 characters long.</span>
              </div>
              <div class="form-group">
                <label>Re-type Password</label>
                <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
              </div>
              <button class="btn btn-primary pull-right">Sign Up</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
     <!-- FOOTER -->
      <footer style="background:; height:120%;">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy;       2017 ProjectWorlds, Inc. &middot;  developed by  <a href="https://facebook.com/yugesh.verma.35">Yugesh Verma </a><a href="http://projectworlds.in">Privacy</a> &middot; <a href="http://projectworlds.in">Terms</a></p>
      </footer>

    </div><!-- /.container -->

 </body>
</html>
