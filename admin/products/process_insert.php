<?php require '../check_admin_login.php';?>
<?php
$name = $_POST['name'];
$image = $_FILES['image'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturers'];
$folder = 'images/';
$path_file = $folder . basename($image['name']);
move_uploaded_file($image["tmp_name"],$path_file);
require '../connect.php';

$sql = "insert into products(name,image,price,description,manufacturer_id)
value ('$name','$path_file','$price','$description','$manufacturer_id')";

mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.php");