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
<form action="insert_process.php" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>
                Tên
            </td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Giới Tính</td>
            <td>
                <input type="radio" name="gender" value="0"> Nam
                <input type="radio" name="gender" value="1"> Nữ
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>
                Số Điện Thoại
            </td>
            <td>
                <input type="text" name="phone_number">
            </td>
        </tr>
        <tr>
            <td>
                Địa chỉ
            </td>
            <td>
                <input type="text" name="address">
            </td>
        </tr>
        <tr>
            <td>
                Ảnh
            </td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Quyền</td>
            <td>
                <input type="radio" name="level" value="0"> SUadmin
                <input type="radio" name="level" value="0"> Admin
            </td>
        </tr>
        <tr>
            <td>
                <button>Thêm</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
