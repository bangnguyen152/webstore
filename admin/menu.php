
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
<ul type="none">
    <li>
        <a href="../products">
            <h3 >Quản lí sản phẩm</h3>
        </a>
    </li>
    <li>
        <a href="../orders">
            <h3 >Quản lí đơn hàng</h3>
        </a>
    </li>
    <li>
        <?php if (!isset($_SESSION['level'])||$_SESSION['level']!=0){

        }else{ ?>
            <a href="../employees">
                <h3 >Quản lí nhân viên</h3>
            </a>
        <?php } ?>
    </li>
</ul>
</body>
</html>