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
.form {
      margin:auto;
      width: 20%;
      padding: 1%;
      background: #816d9c;
    }

    .form h3 {
    
      text-align: center;
      color: black;
    }

    #button {
      margin:auto;
      width: 50%;
      background-color: #816d9c;
      padding: 1.5%;
      border: none;
      cursor: pointer;
    }

    .form #button {
      margin:auto;
      width: 50%;
      font-weight: 600;
      color: black;
      background-color: #816d9c;
    }
    #deleteButton {
      font-weight: 600;
      color: #fff;
      background-color: #eb4034;
      width: 50%;
      border-radius: 1rem;
      padding: 1.5%;
      border: none;
      cursor: pointer;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: white;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #CFCDC3;
    }

    .active {
      background-color: #E7E4D9;
    }
    h1 {
      text-align: center;
      color: black;
    }
    table {
      margin-top: 1%;
      width:100%;
    }
    table, th, td {
      border: none;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: center;
    }
    tr:nth-child(even) {
      background-color: #9981b8;
    }
    tr:nth-child(odd) {
     background-color: white;
    }
    th {
      background-color: #816d9c;
      color: black;
    }
    </style>
    <title>Visits</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <ul>
      <li><a href='welcome.php'>Home</a></li>
      <li><a href="doctors.php">Doctors</a></li>
      <li><a href="patients.php">Patients</a></li>
      <li><a class="active" href="visits.php">Visits</a></li>
      <li><a href="reception.php">Applications</a></li>
    </ul>
    <h1>Visits</h1>
    <table id="visits">
      <tr>
        <th>Doctor name</th>
        <th>Doctor surname</th>
        <th>Doctor specialization</th>
        <th>Patient name</th>
        <th>Patient surname</th>
        <th>Patient pesel</th>
        <th>Patient date of birth</th>
        <th>Patient e-mail</th>
        <th>Visit date</th>
      </tr>
      <?php
      $visit = $polaczenie->query("select * from visit");
      while ($row = mysqli_fetch_row($visit)) {
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td>";
            echo "<td>$row[9]</td>";
            echo "</tr>";
          }
          ?>
    </table>
    </table>
    <br>
    <div class="form">
      <h3>Add Visit</h3>
      <form action="addvisit.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="doctor_name" value="" name="doctor_name"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="doctor_surname" value="" name="doctor_surname"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="doctor_specialization" value="" name="doctor_specialziation"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="patient_name" value="" name="patient_name"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="patient_surname" value="" name="patient_surname"/>
        </div>
        <div class="form-group">
          <input type="bigint" class="form-control" placeholder="patient_pesel" value="" name="patient_pesel"/>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" placeholder="patient_date_of_birth" value="" name="patient_date_of_birth"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="patient_email" value="" name="patient_email"/>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" placeholder="visit_date" value="" name="visit_date"/>
        </div>
        <div class="form-group">
          <input id="button" type="submit" value="Add Visit" name="submit"/>
        </div>
      </div>
   </form>

    <center><p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p></center>
  </body>
</html>