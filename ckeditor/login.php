<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/signin.css" rel="stylesheet" />
    <link href="css/stylereg.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin/index.php'); }
   require_once("koneksi.php");
?>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">It's me Fathur</a>
    </nav>

    <div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Welcome back!</h3>
                    <form action="proseslogin.php" method="post">
                      
                      <div class="form-label-group">
                        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="username" required autofocus>
                        <label for="username">Username</label>
                      </div>
      
                      <div class="form-label-group">
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                        <label for="password">Password</label>
                      </div>
      
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                      <div class="text-center">
                        <a class="small" href="admin.html">Forgot password?</a></div>
                        <div class="text-center">
                            <a class="small" href="signup.php">Daftar</a></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>