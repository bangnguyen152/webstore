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
$id = $_GET['id'];
require '../connect.php';
$sql = "select * from products where id = '$id'";
$result = mysqli_query($conn,$sql);
$each = mysqli_fetch_array($result);

$sql = "select * from manufacturers ";
$manufacturers = mysqli_query($conn,$sql);
?>
<form action="process_update.php?id=<?php echo $each['id']?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $each['id']?>">
    Tên
    <input type="text" name="name" value="<?php echo $each['name']?>">
    <br>
    Giữ ảnh cũ
    <img height="100" src="<?php echo $each['image'] ?>">
    <input type="hidden" name="image_old" value="<?php echo $each['image']?>">
    <br>
    Đổi ảnh mới
    <input type="file" name="image_new">
    <br>
    Giá
    <input type="number" name="price" value="<?php echo $each['price'] ?>">
    <br>
    Mô tả
    <textarea name="description">
        <?php echo $each['description'] ?>
    </textarea>
    <br>
    <!--Nhà SX
    <select name="manufacturers" id="">
        <?php foreach ($manufacturers as $manufacturer){ ?>
            <option value="<?php echo $manufacturer['id'] ?>"
                <?php if ($each['manufacturer_id']==$manufacturer['id']) { ?>
                    selected
                <?php } ?>
            >
                <?php echo $manufacturer['name']?>
            </option>
        <?php } ?>
    </select> -->
    <button>Sửa</button>
</form>
</body>
</html>