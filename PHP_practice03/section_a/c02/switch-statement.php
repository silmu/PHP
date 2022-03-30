<?php
  $day = date('l');

  switch($day){
    case 'Monday':
      $message = 'Get 20% off chocolates';
      break;
    case 'Tuesday':
      $message = 'Get 20% off mints';
      break;
    default:
      $message = 'Buy three packs, get one free.';
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p></p>
  <p><?= $message?></p>
</body>

</html>