<?php
session_start();
?>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 13:08:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body" style="background-color: black;">

    <div class="container">

      <form class="form-signin" action="" name="login" method="post" enctype="multipart/form-data">
          <div style="background-color:black"></div>
        <h2 class="form-signin-heading">Admin</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <input type="password" class="form-control" placeholder="Password" name="password" required>

            <input class="btn btn-lg btn-login btn-block" type="submit" name="submit1" value="Sign In">

            <div class="registration" id="error_msg" style="display: none;color: red">
                <center><strong style="color: red">Wrong!</strong> Email or password.</center>
            </div>

        </div>
          <?php

          if (isset($_POST["submit1"])) {

              if ($_POST["username"] == "rmcadmin" && $_POST["password"] == "rmclogin") {
                  $_SESSION["admin"]="admin";
                  ?>
                  <script type="text/javascript">
                      window.location = "dashboard.php";
                  </script>
              <?php
              }

              else
              {
              ?>
                  <script type="text/javascript">
                      document.getElementById("error_msg").style.display = "block"
                  </script>
                  <?php
              }
          }
          ?>

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


  </body>

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 13:08:45 GMT -->
</html>
