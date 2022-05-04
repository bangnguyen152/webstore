<?php require '../check_SUadmin_login.php';?>
<?php
$name = $_POST['name'];
$photo = $_FILES['photo'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$level = $_POST['level'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$folder = 'photos/';
$path_file = $folder . basename($photo['name']);
move_uploaded_file($photo["tmp_name"],$path_file);
require '../connect.php';

$sql = "insert into products(name,image,price,description,manufacturer_id)
value ('$name','$path_file','$price','$description','$manufacturer_id')";

mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.php");
