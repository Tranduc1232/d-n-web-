<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th {
            border: 1px solid;
            text-align:center;
        }
        th {
            background-color: green ;
            color: white;
            padding: 10px 0;
        }
        table {
            width: 50%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php  session_start(); ?>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa</th>
        </tr>
        <?php if(isset($_SESSION['cart'])) foreach($_SESSION['cart'] as $item) { ?>
        <tr>
            <td><?php echo $item['name'] ?></td>
            <td><img src="<?php echo $item['image'] ?>" width="50px" ></td>
            <td><?php echo $item['price'] ?></td>
            <td>1</td>
            <td><?php echo $item['price'] ?></td>
            <td>Xóa</td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="4">Tổng tiền</td>
          <td colspan="2">
            <?php
                $tongtien=0;
                foreach($_SESSION['cart'] as $item){
                    $tongtien+=$item['price']*1;
                } 
                echo $tongtien;
            ?>
          </td>  
        </tr>
    </table>
</body>
</html>