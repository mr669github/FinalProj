<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FINAL WSD PROJECT! </title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    //Bootstrap CSS
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim:300,400,700">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1> FINAL WSD PROJECT</h1>
                  </div>
                  <p>Welcome!</p>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" action="index.php?page=accounts&action=login" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="login" required="" class="input-material">
                      <label for="login-username" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="psw" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <p id="login" class="login"><input type="submit" name="commit" value="Login"></p>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>

                  <form id="login-form" action="index.php?page=accounts&action=signup" method="post">
                    <div><p class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><p id="login" class="signup"><input type="submit" name="commit" value="Signup"></p></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>

    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>