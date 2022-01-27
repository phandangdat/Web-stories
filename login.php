<html>

<head>
  <link rel="stylesheet" href="css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form action="checkLogin.php" method = "post">
      <input class="un " name = "username" type="text" align="center" placeholder="Username">
      <input class="pass" name = "pass" type="password" align="center" placeholder="Password">
      <input type="submit" class="submit" name="btnSub" align="center" value="Sign in">
      <p class="forgot" align="center"><a href="SignUp.php">Sign up</p>
    </form>      
    </div>
     
</body>

</html>