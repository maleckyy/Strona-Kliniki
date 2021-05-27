<?php
include_once "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM reception WHERE id = $id";
$db -> query($sql);
mysqli_close($db);
header("refresh:0; url=reception.php");
?>