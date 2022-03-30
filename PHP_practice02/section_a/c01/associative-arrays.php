<?php

  $nutrition = [
    'Fat' => '',
    'Sugar' => '',
    'Salt' => ''
  ];

  $nutrition['Fat'] = '30%';
  $nutrition['Sugar'] = '50%';
  $nutrition['Salt'] = '10%';

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <?php
    echo '<ul>';
    foreach ($nutrition as $key => $value){
      echo "<li> $key: $value </li>";
    } 
    echo '</ul>';
    //Second way
    echo "<br /><p>Fat: {$nutrition['Fat']}</p>";
    echo "<p>Sugar: {$nutrition['Sugar']}</p>";
    echo "<p>Salt: {$nutrition['Salt']}</p>";
  ?>
</body>

</html>