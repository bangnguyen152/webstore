<?php
if (isset($_POST['id'])) {
    header("location:index.php?&error=truyenid");
    exit;
}
$id = $_GET['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];
require '../connect.php';
$sql = " delete from manufacturers where id ='$id'";
mysqli_query($conn,$sql);
$erorr = mysqli_error($conn);
mysqli_close($conn);
if (empty($erorr)){
    header('location:index.php?success=Xóa thành công');
}
else{
    header("location:form_update.php?id=$id&erorr=loi truy van");
}
