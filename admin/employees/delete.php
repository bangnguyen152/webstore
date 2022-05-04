<?php require '../check_SUadmin_login.php';?>
<?php
$id = $_GET['id'];
if ($id==0){
    header("Location: ../index.php?error=Loi");
}
require '../connect.php';
$sql = "delete from products where id = '$id'";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.php");