<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <ul>
<?php
  $offers = [
    ['name' => 'Jelly Beans', 'price' => '5', 'stock level' => '10'],
    ['name' => 'Chocolate', 'price' => '6', 'stock level' => '15'],
    ['name' => 'Caramel', 'price' => '3', 'stock level' => '3'],
  ];

  foreach($offers as $value){
    echo "<li>Name: {$value['name']}, price: {$value['price']}</li>";
  }
?>
</ul>
</body>

</html>