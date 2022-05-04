<?php require '../check_admin_login.php';?>
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
$sql = "select * from products ";
$result = mysqli_query($conn,$sql);
?>

<table border="1" width="100%">
    <tr>
        <td bgcolor="#FFFF99" width="15%">
            <a href="../root/index.php">
                <h1 align="center">ADMIN</h1>

            </a>
            <h2 align="center">Xin chào, <?php echo $_SESSION['name'] ?></h2>
            <h3 align="center">
                <a href="../logout.php">
                    Đăng xuất
                </a>
            </h3>
            <?php require '../menu.php'; ?>
        </td>
        <td bgcolor="#3399CC">
            <h1 >Quản lí sản phẩm</h1>
            <h3>
                <a href="form_insert.php">
                    Thêm
                </a>
            </h3>
            <table border="1" width="100%" bgcolor="#CCCCCC">
                <tr>
                    <td>Tên</td>
                    <td>Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
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
        </td>
    </tr>
</table>
</body>
</html>
