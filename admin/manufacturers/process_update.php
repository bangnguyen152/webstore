<?php
/*if (isset($_POST['id'])) {
    header("location:index.php?&error=truyenid");
    exit;
}*/
$id = $_POST['id'];
if (empty($_POST['name'])||empty($_POST['address'])||empty($_POST['phone'])||empty($_POST['image'])){
    header("location:form_update.php?id=$id&erorr= Phải Điền Đủ");
    exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];
require '../connect.php';
$sql = "update manufacturers
set
    name = '$name',
    address = '$address',
    phone = '$phone',
    image = '$image'
where id = '$id'
";
mysqli_query($conn,$sql);
$erorr = mysqli_error($conn);
mysqli_close($conn);
if (empty($erorr)){
    header('location:index.php?success= Sửa thành công');
}
else{
    header("location:form_update.php?id=$id&erorr=loi truy van");
}
