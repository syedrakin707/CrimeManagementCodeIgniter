
<!-- <?php
   if(isset($_POST['username']) AND isset($_POST['password'])) {
      // username and password sent from form

      $username = $_POST['username'];
      $password = $_POST['password'];

      //create customer query
		$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
		//Run query
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$count = mysqli_num_rows($result);
    $error="Invalid Login Credentials";
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['username'] = $username;
         echo "Hai".$username;
         header('Location: gateway.php');
	  }
		  else
		  {
        echo $error;
      }
   }
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Crime Records Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>outside/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>outside/css/navbar-top.css" rel="stylesheet">
	   <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
  </head>

  <body>
 <p align="center"> <img src="<?php echo base_url();?>outside/images/horn.gif" width="5%"><img src="<?php echo base_url();?>outside/images/index.jpg" width="30%"></p>

 <nav class="navbar navbar-dark bg-primary">

  <div class="collapse navbar-collapse" id="navbarNav">
     <center>  <ul class="navbar-nav">
        <a class="nav-link" href="index.php" style="color:white;font-size:medium;">Home <span class="sr-only">(current)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;

        <a class="nav-link" href="#" style="color:white;font-size:medium;">Station</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;

        <a class="nav-link" href="#" style="color:white;font-size:medium;">Police</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;

        <a class="nav-link disabled" href="#" style="color:white;font-size:medium;">Criminal</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="#" style="color:white;font-size:medium;">Complaint</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="#" style="color:white;font-size:medium;">FIR</a>

     </ul></center>
  </div>
</nav>
<img src="<?php echo base_url();?>outside/images/main.jpg" align="center" width="100%" height="50%">
      <div style = "background-color:#FDEE33; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

              <form method = "post" action = "<?php echo base_url(); ?>Main/login_validation">
                 <label>Username  :</label><input type = "text" name = "username" class = "form-control"/>
                 <br /><br />
                 <label>Password  :</label><input type = "password" name = "password" class = "form-control" />
                 <br/><br/>
                 <input type="submit" name="insert" value="Login" class="btn btn-info" /><br />
              </form>


               <br><br><br><br>
	             <div style = "background-color:#FDEE33; padding:3px;text-align:center;"><b>&copy; All Rights Reserved</b></div>

            </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
