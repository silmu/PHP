<?php
$message = '';
if(isset($_GET["city"])){
    switch($_GET["city"]){
        case 'Helsinki':
            $message = "Helsinki: Kaivokatu 1, 00100 Helsinki";
            break;
        case 'London':
            $message = "London: 48 Store Street’, WC1E, 7BS";
            break;
        case 'Sydney':  
            $message = "Sydney: 1243 7th Street, 10212";
            break;
        default:
            $message = "Page not found";
    }
}


?>
<?php include 'includes/header.php' ?>
<p>
    <h2>Select a city:</h2>
<form action="get-2.php" method="get">
        <select name="city" onchange="this.form.submit()">
            <option value="blank">---</option>
            <option value="Helsinki">Helsinki</option>
            <option value="London">London</option>
            <option value="Sydney">Sydney</option>
        </select>
</form>
</p>

<p><?= $message?></p>

    

<?php include 'includes/footer.php' ?>