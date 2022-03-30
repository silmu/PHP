<?php declare(strict_types=1);

  $items = ["Toffee" => [ "stock" => 12, "price" => 3],
            "Mints" => ["stock" => 26, "price" => 2],
            "Fudge" => ["stock" => 8, "price" => 4]];

  function reorder(int $stock): string {
    return $stock < 10? "Yes" : "No";
  };

  function totalPrice(int $stock, float $price): float{
    return $stock * $price;
  };

  function totalTax(int $stock, float $price): float{
    $tax = 0.2; //20%
    $total = totalPrice($stock, $price);
    return $total * $tax;
  };
?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <?php
        foreach($items as $candy => $data){
          echo "<tr>
                <td>$candy</td>
                <td>{$data["stock"]}</td>
                <td>".reorder($data["stock"])."</td>
                <td>".totalPrice($data["stock"], $data["price"])."</td>
                <td>".totalTax($data["stock"], $data["price"])."</td>
                </tr>
          ";
        }
    ?>
    
  </table>
</body>

</html>