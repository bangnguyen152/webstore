<?php require '../check_SUadmin_login.php';
$id = $_GET['id'];
$email = $_POST['email'];
$photo_new = $_FILES['photo_new'];
if ($photo_new['size']>0){
    $folder = 'photos/';
    $path_file = $folder . basename($photo_new['name']);
    move_uploaded_file($photo_new["tmp_name"],$path_file);
}
else{
    $path_file = $_POST['photo_old'];
}

$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$level = $_POST['level'];
$gender = $_POST['gender'];

require '../connect.php';

$sql = "update admin
set
email = '$email',
photo = '$path_file',
address = '$address',
password = '$password',
phone_number = '$phone_number',
password = '$password',
level = '$level',
gender = '$gender'
where 
id = '$id'
";

mysqli_query($conn,$sql);
mysqli_close($conn);
if ($level==$_SESSION['level']){
    header("Location:../logout.php");
    exit;
}
header("location:index.php");