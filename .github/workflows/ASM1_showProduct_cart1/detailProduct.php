<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $products = array(
        array('id'=>'sp1', 'name'=>'Iphone 11','image'=>'1.png','price'=>'12000000',"hot"=>'0','sale'=>'50'),
        array('id'=>'sp2','name'=>'Iphone 12','image'=>'2.jpeg','price'=>'22000000',"hot"=>'1','sale'=>'45'),
        array('id'=>'sp3','name'=>'Iphone 13','image'=>'3.jpeg','price'=>'32000000',"hot"=>'0','sale'=>'30'),
    );
    $index=$_GET['index'];
    ?>
    <img src="" alt="">
    <p><?php echo $_GET['name']?></p>
    <p></p>
</body>
</html>