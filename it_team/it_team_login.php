<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="it_team_login_style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active">It Team Sign In Form</h2>
    <!-- Icon -->
    <div class="fadeIn first">
    <i class="fas fa-user"></i>
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>
    <?php
      if(isset($_SESSION['msg'])){
        
    ?>
    <h3 style="color:red;text-shadow:1px 1px 10px blue;"><?php echo $_SESSION['msg']; unset( $_SESSION['msg']); ?></h3>
    <?php }
        ?>
      

    <!-- Login Form -->
    <form method="post" action="it_team_login_code.php">
      <input type="text" id="login" class="fadeIn second" name="lginunme" placeholder="user id">
      <input type="password" id="password" class="fadeIn third" name="loginpw" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>