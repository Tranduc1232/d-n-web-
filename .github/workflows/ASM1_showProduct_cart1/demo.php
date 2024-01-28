<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sanpham{
            display: inline-block;
        }
        .sanpham img{
            width:250px;
        }
    </style>
</head>
<body>
        <!-- <div class="sanpham">
            <form action="" method="post">
                <img src="3.jpeg" alt="">
                <p>Điện thoại 3</p>
                <p>Giá : <span>16.000.000</span> </p>
                <input type="submit" name="dathang" value="Đặt hàng">
            </form>
        </div> -->
    <a href="cart.php"><img src="cart.png"  width="50px" height="50px"></a>
    <?php
        session_start();
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        // session_destroy();
         $products = array(
            array('id'=>'sp1', 'name'=>'Iphone 11','image'=>'1.png','price'=>'12000000',"hot"=>'0','sale'=>'50'),
            array('id'=>'sp2','name'=>'Iphone 12','image'=>'2.jpeg','price'=>'22000000',"hot"=>'1','sale'=>'45'),
            array('id'=>'sp3','name'=>'Iphone 13','image'=>'3.jpeg','price'=>'32000000',"hot"=>'0','sale'=>'30'),
        );
        if(isset($_SESSION['cart'])) echo count($_SESSION['cart']);
        //Hiển thị sản phẩm nổi bật khi hot=1
        echo '<h1>Danh sách nổi bật</h1>';
        foreach($products as $index=>$product){
            if($product['hot']==1){
            echo '<div class="sanpham">
                    <form action="" method="post">
                        <a href="det"><img src="'.$product['image'].'" alt=""></a>
                        <p>'.$product['name'].'</p>
                        <p>Giá : <span>'.$product['price'].'</span> </p>
                        <input type="hidden" name="index" value="'.$index.'">
                        <input type="submit" name="dathang" value="Đặt hàng">
                     </form>
                    </div>';
        }
        }
        // Hiển thị sản phẩm bán chạy khi sale>40
        echo '<h1>Danh sách bán chạy</h1>';
        foreach($products as $index=>$product){
            if($product['sale']>=45){
            echo '<div class="sanpham">
                    <form action="" method="post">
                        <img src="'.$product['image'].'" alt="">
                        <p>'.$product['name'].'</p>
                        <p>Giá : <span>'.$product['price'].'</span> </p>
                        <input type="hidden" name="index" value="'.$index.'">
                        <input type="submit" name="dathang" value="Đặt hàng">
                     </form>
                    </div>';
        }
        }
        //Hiển thị danh mục sản phẩm theo loại (máy lạnh, điện thoại,...)
        
        // Hiển thị danh sách sản phẩm
        echo '<h1>Danh sách sản phẩm</h1>';
        foreach($products as $index=>$product){
            echo '<div class="sanpham">
                    <form action="" method="post">
                        <img src="'.$product['image'].'" alt="">
                        <p>'.$product['name'].'</p>
                        <p>Giá : <span>'.$product['price'].'</span> </p>
                        <input type="hidden" name="index" value="'.$index.'">
                        <input type="submit" name="dathang" value="Đặt hàng">
                     </form>
                    </div>';
        }
        //Thêm sản phẩm vào giỏ hàng
        if(isset($_POST['dathang'])&&($_POST['dathang'])){
            $index=$_POST['index'];
            array_push($_SESSION['cart'],$products[$index]);
            header("Refresh:0");
        }
    ?>
</body>
</html>