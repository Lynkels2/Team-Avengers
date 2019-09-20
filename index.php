<?php
    require('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <div class="container clear">
    <div class="left">
      <div class="form-container">
        <div class="form-tab">
          <ul>
            <li>
              <a href="javascript:void(0)" data-tab-content="login">Login</a>
            </li>
            <li class="active">
              <a href="javascript:void(0)" data-tab-content="signup">Signup</a>
            </li>
          </ul>
        </div>

        <div class="form-content active" id="signup">
          <form id="signup-form" method="post">
            <div class="input-group">
              <label>Fullname</label>
              <input type="text" id="fullname" name="name" placeholder="Firstname Lastname" required>
            </div>

            <div class="input-group">
              <label>Email</label>
              <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="input-group">
              <label>Password</label>
              <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            
            <?php 
              if(isset($login)){
                  if(count($login['errors']) > 0){
                      foreach($login['errors'] as $error) 
                      echo "<p class='error' style='text-align: center; color: red !important;'> {$error}</p>";
                  }
              }
              if(isset($register)){
                  if(count($register['errors']) > 0){
                      foreach($register['errors'] as $error) 
                      echo "<p class='error' style='text-align: center; color: red !important;'> {$error}</p>";
                  }elseif($register['success']){
                      echo "<p class='' style='text-align: center; color: green !important;'> Registeration Successfull</p>";
                  }
              }
            ?>   
            <button type="submit" name="signup">SIGNUP</button>
          </form>
        </div>

        <div class="form-content" id="login">
          <form id="login-form" method="post">
            <div class="input-group">
              <label>Email</label>
              <input type="email" id="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="input-group">
              <div class="clear">
                <label class="left">Password</label>
                <a href="javascript:void(0)" class="right">Forgot Password?</a>
              </div>
              <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            
            <?php 
                if(isset($login)){
                    if(count($login['errors']) > 0){
                        foreach($login['errors'] as $error) 
                        echo "<p class='error' style='text-align: center; color: red !important;'> {$error}</p>";
                    }
                }
            ?>
            <button type="submit" name="signin">LOGIN</button>
          </form>
        </div>
      </div>
    </div>

    <div class="right">
      <div class="content">
        <h1>
          A new way to experience real estate in the infinite virtual
        </h1>
      </div>
    </div>
  </div>

  <script src="./js/main.js"></script>
</body>

</html>
