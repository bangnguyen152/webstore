<?php
$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';

$sql = "Select * from admin 
where  email = '$email' and password = '$password'";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)==1){
    $each = mysqli_fetch_array($result);
    session_start();
    $_SESSION['id']= $each['id'];
    $_SESSION['level'] = $each['level'];
    $_SESSION['name'] = $each['name'];

    header('location:root/index.php?success');
    exit;
}
header("Location: index.php?error");