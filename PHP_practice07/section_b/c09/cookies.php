<?php
/*
Overall idea here is to set cookies and count the number of pages a visitor has viewed.

Step 1: Create a counter to store number of pages vistor has viwed. Create a cookie to hold 
that counter variable. 

Step 2: Increment the value of counter, as the visitor has just viewed a page.

Step 3: Use a setcookie() function to tell the browser to create or update a cookie
and also store the value from the variable in that cookie

Step 4: A new variable should hold message saying the number of pages the visitor has viewed.
e.g. "Page views: "



*/
    $counter = 1;

    if(isset($_COOKIE['views'])){
        $counter = intval($_COOKIE['views']) + 1;
    }
    setcookie('views', $counter);

    $message = "Page views: " . $_COOKIE['views'];
?>

<?php include 'includes/header.php'; ?> 

<h1><?= $message ?></h1>
<p><a href="cookies.php"> Refresh this page </a> to see the page views increase </p>

<?php include 'includes/footer.php'; ?> 