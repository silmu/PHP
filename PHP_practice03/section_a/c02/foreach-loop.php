<?php
  $stock = ["Toffee" => 2.99, "Mints" => 1.99, "Fudge" => 3.49];
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <ul><?php
        foreach($stock as $key => $value){
        echo "<li>$key: $$value </li>";
      }
    ?>
    </ul>
  </table>
</body>

</html>