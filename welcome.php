<?php
   include('session.php');
   require "connect.php";

   $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

   $sql = "select * from users";

   $result = $polaczenie->query($sql);
   ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style media="screen">
  body{

    background: #e3e3e3;
  }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #e3e3e3;
    }
    li {
      float: center;
    }
    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    li a:hover {
      background-color: #816d9c;
    }
  </style>
  <title>Princeton-Plainsboro</title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <ul>
    <li><a href='doctors.php'>Doctors</a></li>

    <li><a href='patients.php'>Patients</a></li>

    <li><a href='visits.php'>Visits</a></li>

    <li><a href="reception.php">Applications</a></li>

  </ul> 

  <?php 

  
  
  ?>
  <footer><center><p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p></center></footer>
 

</body>
</html>