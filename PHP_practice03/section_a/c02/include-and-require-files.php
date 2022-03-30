<?php
    include './includes/header.php';
    include './includes/footer.php';
    $stock = 0;
    if($stock === 0){
        $message = 'Out of stock';
    } elseif ($stock <= 10){
        $message = 'Low stock';
    } else {
        $message = 'Good availability';
    }
?>


<h2>Chocolate</h2>
<p><?= $message; ?></p>