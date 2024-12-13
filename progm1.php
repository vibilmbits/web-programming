<?php
$units_consumed=170;
$tariff_per_unit=8.0;
$total_cost=$units_consumed*$tariff_per_unit;
echo"<h3>Electricity Bill</h3>";
echo"units_consumed:".$units_consumed."kwh<br>";
echo"tariff_rate:$".number_format($tariff_per_unit,2)."per kwh<br>";
echo"total_cost:$".number_format($total_cost,8)."<br>";
?>
