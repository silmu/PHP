<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <ul>
  <?php
    $nutrition = ['fat' => '30%', 'sugar' => '30%', 'salt' => '10%'];
    $nutrition['fat'] = '40%';
    $nutrition['fiber'] = '20%';

    echo "<li> Fat: {$nutrition['fat']} </li>";
    echo "<li> Sugar: {$nutrition['sugar']} </li>";
    echo "<li> Salt: {$nutrition['salt']} </li>";
    echo "<li> Fiber: {$nutrition['fiber']} </li>";
  ?>
  </ul>
</body>

</html>