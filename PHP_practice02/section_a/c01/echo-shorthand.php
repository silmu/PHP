<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p>
  <?php
    $candies = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans'];
  ?>
  <?= "Favorites: {$candies[3]}, {$candies[4]}, {$candies[5]}"?>
</p>
</body>

</html>