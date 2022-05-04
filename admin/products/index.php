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
<?php
//require '../menu.php';
require '../connect.php';
$sql = "select 
    products.*, manufacturers.name as manufaceturer_name
    from products join manufacturers on products.manufacturer_id = manufacturers.id";
$result = mysqli_query($conn,$sql);
?>
<h1>Quản lí sản phẩm</h1>
<a href="form_insert.php">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <td>Tên</td>
        <td>Ảnh</td>
        <td>Giá</td>
        <td>Mô Tả</td>
        <td>Nhà SX</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach ($result as $each){ ?>
        <tr>
            <td>
                <?php echo $each['name'] ?>
            </td>
            <td>
                <img height="100" src="<?php echo $each['image'] ?>" alt="">
            </td>
            <td>
                <?php echo $each['price'] ?>
            </td>
            <td>
                <?php echo $each['description'] ?>
            </td>
            <td>
                <?php echo $each['manufaceturer_name'] ?>
            </td>
            <td>
                <a href="form_update.php?id=<?php echo $each['id'] ?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id'] ?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>