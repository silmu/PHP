<?php
  $stock = false;
  if ($stock === true) {
    $message = 'In stock';
  } elseif ($stock === false) {
    $message = 'Sold out';
  } else {
    $message = 'Coming soon';
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p><?= $message?></p>
</body>

</html>