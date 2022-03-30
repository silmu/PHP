<?php 

//1$ = 0.9 euro
//1euro = 1.12$

include 'sandbox2.php';


function conversion($initialValue, $targetValue, float $amount): float{
    return $initialValue === $targetValue? $amount : 
    ($initialValue === 'dollar'? $amount * 0.9 : $amount * 1.12);
};

$initialValue =  $_GET["initialValue"];
$targetValue = $_GET["targetValue"];
$amount = (float) $_GET["amount"];

$result = conversion($initialValue, $targetValue, $amount);

echo "$result";