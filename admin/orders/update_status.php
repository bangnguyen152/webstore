<?php
require '../check_admin_login.php';
$id = $_GET['id'];
$status = $_GET['status'];

require '../connect.php';
$sql = "update orders set status = '$status' where id = '$id'";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: index.php");