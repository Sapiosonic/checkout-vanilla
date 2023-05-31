<?php 
  use app\database\models\Product;
  require '../vendor/autoload.php';

  $product = new Product;
  $products = $product->all('id,name,slug,price,image');
  var_dump($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>