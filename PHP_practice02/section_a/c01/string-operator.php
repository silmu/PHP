<?php

  $name = 'Mr. James';
  $thanks = $name.'\'s Order<br/>Thank you ' . $name;

?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p>
    <?= $thanks?>
  </p>
</body>

</html>