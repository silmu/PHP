<?php
  $stock = false;
  $message = $stock ? 'In stock' : 'Sold out';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?= $message ?></p>
</body>

</html>