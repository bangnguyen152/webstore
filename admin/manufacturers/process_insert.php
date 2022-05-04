<?php
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];
require '../connect.php';
$sql = "insert into manufacturers(name,address,phone,image)
value ('$name','$address','$phone','$image')";
mysqli_query($conn,$sql);
mysqli_close($conn);
header('location:index.php?success= Thêm thành công');