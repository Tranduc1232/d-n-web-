<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sp{
            display: inline-block;
        }
    </style>
</head>
<body>
    <a href="cart.php"><img  src="cart.png" width="50px"></a>
    <?php 
    session_start();
    // session_destroy();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
    $products=array(
        array('id'=>'sp1','name'=>'Iphone 11','image'=>'1.png','price'=>'12000000',"hot"=>'0','sale'=>'50'),
        array('id'=>'sp2','name'=>'Iphone 12','image'=>'2.jpeg','price'=>'22000000',"hot"=>'1','sale'=>'45'),
        array('id'=>'sp3','name'=>'Iphone 13','image'=>'3.jpeg','price'=>'32000000',"hot"=>'0','sale'=>'30'),
    );
    echo count($_SESSION['cart']);
    echo '<h1>Danh sách sản phẩm nổi bật</h1>';
    foreach($products as $index=>$product){
        if($product['hot']==1){
            echo      '<div class="sp">
            <form action="" method="post">
                <img src="'.$product['image'].'" width="200px">
                <p>'.$product['name'].'</p>
                <p>Giá: '.$product['price'].'</p>
                <input type="hidden" name="index" value="'.$index.'">
                <input type="submit" name="mua" value="Mua ngay">
            </form>
            </div>';
        }
    }
    echo '<h1>Danh sách sản phẩm bán chạy</h1>';
    foreach($products as $index=>$product){
        if($product['sale']>=40){
            echo      '<div class="sp">
            <form action="" method="post">
                <img src="'.$product['image'].'" width="200px">
                <p>'.$product['name'].'</p>
                <p>Giá: '.$product['price'].'</p>
                <input type="hidden" name="index" value="'.$index.'">
                <input type="submit" name="mua" value="Mua ngay">
            </form>
            </div>';
        }
    }
    echo '<h1>Danh sách sản phẩm</h1>';
    foreach($products as $index=>$product){
        echo      '<div class="sp">
                    <form action="" method="post">
                        <img src="'.$product['image'].'" width="200px">
                        <p>'.$product['name'].'</p>
                        <p>Giá: '.$product['price'].'</p>
                        <input type="hidden" name="index" value="'.$index.'">
                        <input type="submit" name="mua" value="Mua ngay">
                    </form>
                    </div>';
    }
    if(isset($_POST['mua'])&&($_POST['mua'])){
        if(isset($_POST['index'])) $index=$_POST['index'];
        array_push($_SESSION['cart'],$products[$index]);
        // print_r($_SESSION['cart']);
        header('refresh:0');
    }
    


    ?>
</body>
</html>