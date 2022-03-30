<?php

$candy = 'Caramel';
$price = 5;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php 
    $candy = 'Chocolate';
    $price = '10';

    echo "<h2>Candy name: $candy <br />
    Price: $price </h2>";
  ?>
</body>

</html>