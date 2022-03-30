<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <ol>
  <?php 
    $best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans'];

    echo '<li>' .$best_sellers[0] . '</li>';
    echo '<li>' .$best_sellers[1]. '</li>';
    echo '<li>' .$best_sellers[2]. '</li>';
  ?>
  
  </ol>
</body>

</html>