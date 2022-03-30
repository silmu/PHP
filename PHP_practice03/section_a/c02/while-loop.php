<?php
  $amount = 5;
  $i = 0;
  $cost = 1.99;
  $sum = 0;
  while($i < $amount){
    $sum += $cost;
    $i++;
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?= "Price for $amount packs of candy is $$sum "?>
  </p>
</body>

</html>