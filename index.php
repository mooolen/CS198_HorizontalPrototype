<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TECS: Test Essay Content Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/flat-ui.css" rel="stylesheet">
    <link href="custom/style.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
<div class="login">
        <div class="login-screen">
         <h3>TECS: Test Essay Checking Software</h3>
          <div class="login-form">
            <?php
            if(isset($_GET['login_error']) && $_GET['login_error'] == 1) {
                echo '
                  <div class="alert alert-error">
                    <strong>Invalid username and password combination!</strong>
                  </div>
                ';
              }
            ?>
            <form action="login-confirm.php" method="post">
              <div class="control-group">
                <input type="text" class="login-field" value="" placeholder="Enter your username" name="username" required/>
                <label class="login-field-icon fui-user"></label>
              </div>

              <div class="control-group">
                <input type="password" class="login-field" value="" placeholder="Password" name="password" required/>
                <label class="login-field-icon fui-lock"></label>
              </div>

              <button class="btn btn-inverse btn-large btn-block" type="submit">Login</button>
              <a class="login-link" href="#">Forgot your password?</a>
              <a class="login-link" href="#">Not yet a member? Sign up here.</a>
            </form>
          </div>
        </div>
      </div>
</body>