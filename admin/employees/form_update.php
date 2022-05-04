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
$id = $_GET['id'];
require '../connect.php';
$sql = "select * from admin where id = '$id'";
$result = mysqli_query($conn,$sql);
$each = mysqli_fetch_array($result);
?>
<form action="update_process.php?id=<?php echo $each['id']?>" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $each['id']?>">
    <table border="1">
        <tr>
            <td>
                Tên
            </td>
            <td>
                <input type="text" name="name" value="<?php echo $each['name']?>" >
            </td>
        </tr>
        <tr>
            <td>Giới Tính</td>
            <td>
                <?php if ($each['gender'] == 0 ) { ?>
                    <label>
                        <input type="radio" name="gender" value="0" checked>
                    </label> Nam
                    <label>
                        <input type="radio" name="gender" value="1" >
                    </label> Nữ
                <?php }else{ ?>
                    <label>
                        <input type="radio" name="gender" value="0" >
                    </label> Nam
                <label>
                    <input type="radio" name="gender" value="1" checked>
                </label> Nữ
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="text" name="email" value="<?php echo $each['email']?>">
            </td>
        </tr>
        <tr>
            <td>
                Số Điện Thoại
            </td>
            <td>
                <input type="text" name="phone_number" value="<?php echo $each['phone_number']?>">
            </td>
        </tr>
        <tr>
            <td>
                Địa chỉ
            </td>
            <td>
                <input type="text" name="address" value="<?php echo $each['address']?>">
            </td>
        </tr>
        <tr>
            <td>
                Giữ ảnh cũ
            </td>
            <td>
                <img height="100" src="<?php echo $each['photo'] ?>">
                <input type="hidden" name="photo_old" value="<?php echo $each['photo']?>">
            </td>
        </tr>
        <tr>
            <td>
                Đổi ảnh mới
            </td>
            <td>
                <input type="file" name="photo_new">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password" value="<?php echo $each['password']?>"></td>
        </tr>
        <tr>
            <td>Quyền</td>
            <td>
                <?php if ($each['level'] == 0 ) { ?>
                    <label>
                        <input type="radio" name="level" value="0" checked >
                    </label> SUadmin
                    <label>
                        <input type="radio" name="level" value="1" disabled>
                    </label> Admin
                <?php }else{ ?>
                    <label>
                        <input type="radio" name="level" value="0" >
                    </label> SUadmin
                    <label>
                        <input type="radio" name="level" value="1" checked>
                    </label> Admin
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>
                <button>Sửa</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>

