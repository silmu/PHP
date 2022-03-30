<?php
  $inStock = false;
  if($inStock){
    $message = 'In stock';
  } else {
    $message = 'Sold out';
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?= $message ?></p>
</body>

</html>