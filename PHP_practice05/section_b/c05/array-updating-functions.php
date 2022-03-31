<?php
    $orders = ["Watercolors", "Pencils", "Pens", "Brushes"];
    array_unshift($orders, "Eraisers");
    // print_r($orders);
    array_pop($orders);

?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>

<ol>
    <li><?= implode("</li><li>" ,$orders)?></li>
</ol>
<ol>
    <?php 
        foreach($orders as $order){
            echo "<li>".$order."</li>";
        }
    ?>
</ol>

<?php include 'includes/footer.php'; ?>