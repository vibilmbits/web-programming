<?php
$price_per_item=20.5;
$quantity=3;
$total_cost=$price_per_item*$quantity;
echo"price per item:$".number_format($price_per_item,2)."<br>";
echo"quantity:".$quantity."<br>";
echo"total cost:$".number_format($total_cost,2);
?>