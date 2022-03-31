<?php
/* Write PHP code here */
?>
<?php include 'includes/header.php' ?>

    <!-- ........Solution with Select.........-->

    <!-- <form action="get-1.php" method="get">
        <select name="city">
            <option value="Helsinki">Helsinki</option>
            <option value="London">London</option>
            <option value="Sydney">Sydney</option>
        </select>
        <p><input type="submit" value="Submit"></p>
    </form>

    /*  <?php
        // if(isset($_GET["city"])){
        //     switch($_GET["city"]){
        //         case 'Helsinki':
        //             echo "Helsinki: Kaivokatu 1, 00100 Helsinki";
        //             break;
        //         case 'London':
        //             echo "London: 48 Store Street’, WC1E, 7BS";
        //             break;
        //         case 'Sydney':  
        //             echo "Sydney: 1243 7th Street, 10212";
        //             break;
        //         default:
        //             echo "Page not found";
        //     }
        // }
    ?> */

    <!-- ........Solution with links.........-->

    <?php 
        $cities = ["Helsinki" => "Helsinki: Kaivokatu 1, 00100 Helsinki",
                    "London" => "London: 48 Store Street’, WC1E, 7BS",
                    "Sydney" => "Sydney: 1243 7th Street, 10212"];

         $city = isset($_GET['city']) ? $_GET['city'] : "";
         $address = isset($cities[$city]) ? $cities[$city] : "";
         

         foreach($cities as $key=>$value){
             echo "<a href='get-1.php?city=$key'> $key </a>";
         }
         echo "<p>$address</p>";
    ?>

<?php include 'includes/footer.php' ?>