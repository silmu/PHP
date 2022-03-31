<?php
    $greeting = ["Hello", "Welcome", "Moi"];

    $bestsellers = ["Watercolors", "Pencils", "Pens", "Brushes"];
    $details = ["firstname" => "Mary", "lastname" => "Jones"];

    $topThree = array_slice($bestsellers, 0, 3);

?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<h2><?= array_key_exists("firstname", $details) ?  $greeting[(array_rand($greeting))] . ", ". $details["firstname"] : $greeting; ?></h2>
<p>Amount of bestsellers: <?= count($bestsellers)?></p>
<h3>Top 3:</h3>
<ol>
    <li><?=implode("</li><li>", $topThree) ?></li>
    
</ol>


<?php include 'includes/footer.php'; ?>