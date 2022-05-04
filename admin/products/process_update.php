<?php require '../check_SUadmin_login.php';
$id = $_GET['id'];
$name = $_POST['name'];
$image_new = $_FILES['image_new'];
if ($image_new['size']>0){
    $folder = 'images/';
    $path_file = $folder . basename($image_new['name']);
    move_uploaded_file($image_new["tmp_name"],$path_file);
}
else{
    $path_file = $_POST['photo_old'];
}

$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturers'];

require '../connect.php';

$sql = "update products
set
name = '$name',
image = '$path_file',
price = '$price',
description = '$description'
where 
id = '$id'

";

mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.php");