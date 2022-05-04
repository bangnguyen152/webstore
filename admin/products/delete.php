<?php
$id = $_GET['id'];
require '../connect.php';
$sql = "delete from products where id = '$id'";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.php");