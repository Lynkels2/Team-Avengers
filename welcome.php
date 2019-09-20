<?php
    require('functions.php');
    
    $user = is_auth();
    
    if(isset($_POST['logout'])){
        logout();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <div class="container clear">

    <div class="right">
      <div class="content" style="text-align: center;">
        <h1>
            Welcome <?php echo $user['name'] ?> 
        </h1>
        <form id="" method="post">
            <button type="submit" style="width: 250px;" name="logout">LOGOUT</button>
        </form>
      </div>
    </div>
    
  </div>
</body>

</html>
