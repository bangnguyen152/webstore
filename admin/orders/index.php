<?php require '../check_admin_login.php'; ?>
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
$sql = "select 
orders.*, 
customers.fullname as cuName,
customers.phone_number as cuPhone,
customers.address as cuAddress
from orders
join customers
on customers.id = orders.customer_id
";
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
        <h1 >Quản lí đơn hàng</h1>
        <table border="1" width="100%" bgcolor="#CCCCCC">
            <tr>
                <th>Mã</th>
                <th>Thời gian đặt</th>
                <th>Thông tin người nhận</th>
                <th>Thông tin người đặt</th>
                <th>Trạng thái</th>
                <th>Tổng tiền</th>
                <th>Xem</th>
                <th>Thao tác</th>
            </tr>
            <?php foreach ($result as $each){ ?>
                <tr align="center">
                    <td>
                        <?php echo $each['id'] ?>
                    </td>
                    <td>
                        <?php echo $each['order_date'] ?>
                    </td>
                    <td>
                        <?php echo $each['fullname'] ?><br>
                        <?php echo $each['address'] ?><br>
                        <?php echo $each['phone_number'] ?><br>
                    </td>
                    <td>
                        <?php echo $each['cuName'] ?><br>
                        <?php echo $each['cuAddress'] ?><br>
                        <?php echo $each['cuPhone'] ?><br>
                    </td>
                    <td>
                       <?php if ($each['status']==0){
                           echo 'Đang Chờ';
                       }
                       elseif ($each['status']==1){
                           echo 'Đã Duyệt';
                       }else{
                           echo 'Đã hủy';
                       }
                       ?>
                    </td>
                    <td>
                        <?php echo $each['total_money']?>
                    </td>
                    <td>
                        <a href="detail.php?id=<?php echo $each['id']?>">
                            Xem
                        </a>
                    </td>
                    <td>
                        <?php if ($each['status'] == 0){ ?>
                            <a href="update_status.php?id=<?php echo $each['id']?>&&status=1">
                                Duyệt
                            </a><br>
                            <a href="update_status.php?id=<?php echo $each['id']?>&&status=-1">
                                Hủy
                            </a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </td>
    </tr>
</table>
</body>
</html>
