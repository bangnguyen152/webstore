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
<?php
require '../connect.php';
$sql = "select * from manufacturers";
$result = mysqli_query($conn,$sql);
$each = mysqli_fetch_array($result);
?>
<form action="process_insert.php" method="post" enctype="multipart/form-data">
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
            <td>
                Ảnh
            </td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="number" name="price"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <textarea name="description"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <button>Thêm</button>
            </td>
        </tr>
    </table>
    <!--Tên
    <input type="text" name="name">
    <br>
    Ảnh

    <br>
    Giá
    <input type="number" name="price">
    <br>
    Mô tả
    <textarea name="description"></textarea>
    <br> -->
    <!--Nhà SX
    <select name="manufacturers" id="">
        <?php foreach ($result as $each){ ?>
            <option value="<?php echo $each['id'] ?>">
                <?php echo $each['name']?>
            </option>
        <?php } ?>
    </select> -->

</form>
</body>
</html>