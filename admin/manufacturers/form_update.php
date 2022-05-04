<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require '../connect.php';
if (isset($_POST['id'])){
    header("location:index.php?&error= Truyền ID");
    exit;
}
$id = $_GET['id'];
$sql = "select * from manufacturers where id = '$id'";
$result = mysqli_query($conn,$sql);
$each = mysqli_fetch_array($result);
?>
<form action="process_update.php?id=<?php echo $each['id']?>" method="post">
    <input type="hidden" name="id" value="<?php echo $each['id']?>">
    Tên
    <input type="text" name="name" value="<?php echo $each['name']?>">
    <br>
    Địa chỉ
    <textarea name="address" ><?php echo $each['address']?></textarea>
    <br>
    Điện thoại
    <input type="text" name="phone" value="<?php echo $each['phone']?>">
    <br>
    Ảnh
    <input type="text" name="image" value="<?php echo $each['image']?>">
    <br>
    <button>Sửa</button>
</form>
</body>
</html>