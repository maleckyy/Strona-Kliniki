<?php
   include("connect.php");
   session_start();
   $error = '';
   $active = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $sql = "SELECT id FROM users WHERE username = '$myusername' AND pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         if($myusername == 'admin') {
         header("location: welcome.php");
       } else {
         header("location: patientform.php");
       }
      }else {
         $error = " Incorrect data";
      }
   }
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style media="screen">
    .login-form {
      width: 50%;
      margin: 0 auto;
      margin-top: 10%;
      padding: 5%;
      background: white;
    }

    .login-form h3 {
      text-align: center;
      color: black;
    }

    .login-container form {
      padding: 10%;
    }

    .btnSubmit {
      width: 50%;
      
      padding: 1.5%;
      border: none;
      cursor: pointer;
    }

    .login-form .btnSubmit {
      font-weight: 600;
      color: black;
      background-color: #fff;
    }

    .login-form .newAcc {
      color: black;
      font-weight: 600;
      text-decoration: none;
    }
  </style>
  <title>Login</title>
</head>

<body>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <div class="container login-container">
    <div class="login-form">
      <h3>Login</h3>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Nazwa u??ytkownika" value="" />
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Has??o" value="" />
        </div>
        <br>
        <div class="form-group">
          <input id="button" type="submit" class="btnSubmit" value="Login" />
        </div>
        <div class="form-group">
          <div style="font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          <a href="register.php" class="newAcc" value="newAcc"> Create an account </a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>