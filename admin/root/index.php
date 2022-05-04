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
<table border="1" width="100%">
    <tr>
        <td bgcolor="#FFFF99" width="100%">
            <a href="../root/index.php">
                <h1 align="center">ADMIN</h1>
            </a>
            <h2 align="center">Xin chào, <?php echo $_SESSION['name'] ?></h2>
            <h3 align="center">
                <a href="../logout.php">
                    Đăng xuất
                </a>
            </h3>
        </td>
    </tr>
    <tr>
        <td bgcolor="#CCCCCC" width="100%">
            <?php require '../menu.php'; ?>
        </td>
    </tr>
</table>
</body>
</html>