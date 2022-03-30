<?php

  $quantity = 6;
  $order = 4;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>In stock: <?= $quantity >= $order?></p>
</body>

</html>