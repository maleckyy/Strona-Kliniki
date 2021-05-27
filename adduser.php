 <?php
include_once "connect.php";
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "INSERT INTO users (username , pass)
  VALUES ('$username','$password')";

$db -> query($sql);
}
mysqli_close($db);
header("refresh:0; url=login.php");
?>