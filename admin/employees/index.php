<?php require '../check_SUadmin_login.php';?>
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
$sql = 'select * from admin';
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
            <h1 >Quản lí nhân viên</h1>
            <h3>
                <a href="form_insert.php">
                Thêm
                </a>
            </h3>
            <table border="1" width="100%" bgcolor="#CCCCCC">
                <tr>
                    <td>Mã</td>
                    <td>Ảnh</td>
                    <td>Tên</td>
                    <td>Giới Tính</td>
                    <td>Địa chỉ</td>
                    <td>Điện thoại</td>
                    <td>Email</td>
                    <td>Mật khẩu</td>
                    <td>Quyền</td>
                    <td>Thao Tác</td>
                </tr>
                <?php foreach ($result as $each){ ?>
                <tr>
                    <td><?php echo $each['id']?></td>
                    <td>
                        <img height="100" src="<?php echo $each['photo'] ?>" alt="">
                    </td>
                    <td><?php echo $each['name']?></td>
                    <td><?php if ($each['gender']==0){
                        echo 'Nam';
                        }else{
                            echo 'Nữ';
                        } ?></td>

                    <td><?php echo $each['address']?></td>
                    <td><?php echo $each['phone_number']?></td>
                    <td><?php echo $each['email']?></td>
                    <td><?php echo $each['password']?></td>
                    <td>
                        <?php if ($each['level']==0){
                            echo 'SUadmin';
                        }else{
                            echo 'Admin';
                        }?>
                    </td>
                    <td><a href="form_update.php?id=<?php echo $each['id']?>">
                            Sửa
                        </a>
                        <br>
                        <a href="delete.php?id=<?php echo $each['id']?>">
                            Xóa
                        </a>
                    </td>
                    <?php } ?>
                </tr>
            </table>
    </table>
<br>
<h1><?php echo $_SESSION['level'];?></h1>
</body>
</html>
