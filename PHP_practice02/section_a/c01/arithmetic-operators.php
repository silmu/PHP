<?php 
  $amount = 3;
  $cost = 5;
  $tax = 20;

  $totalCost = $amount * $cost;
  $totalTax = $totalCost * ($tax / 100);
  $totalCostTaxed = $totalCost + $totalTax;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p> Amount: <?= $amount?></p>
  <p> Cost: $<?= $cost?></p>
  <br />
  <p> Total (tax 20% included): $<?= $totalCostTaxed?></p>
</p>
</body>

</html>