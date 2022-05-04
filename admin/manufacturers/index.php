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
<a href="../root/index.php">Trở lại</a>
<h1>Đây là khu vực quản lí nhà sản xuất</h1>
<br>
<a href="form_insert.php">
    Thêm
</a>

<?php
require '../connect.php';
$sql = 'select * from manufacturers';
$result = mysqli_query($conn,$sql);
?>
<table border="1" width="100%">
    <tr>
        <td>Mã</td>
        <td>Tên</td>
        <td>Địa chỉ</td>
        <td>Điện thoại</td>
        <td>Ảnh</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach ($result as $each){ ?>
        <tr>
            <td><?php echo $each['id']?></td>
            <td><?php echo $each['name']?></td>
            <td><?php echo $each['address']?></td>
            <td><?php echo $each['phone']?></td>
            <td>
                <img src="<?php echo $each['image'] ?>" alt="" height="125">
            </td>
            <td><a href="form_update.php?id=<?php echo $each['id']?>">
                    Sửa
                </a>
            </td>
            <td><a href="delete.php?id  =<?php echo $each['id']?>">
                    Xóa
                </a>
            </td>
        <?php } ?>
        </tr>
</table>
</body>
</html>
