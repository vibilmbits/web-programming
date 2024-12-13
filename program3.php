<?php
$students=["Alice","Bob","Charlie","Diana","Eve"];
echo"orginal Array:<br>";
print_r($students);
echo"<br><br>";

asort($students);
echo"Array sorted in asceding order:<br>";
print_r($students);
echo"<br><br>";
arsort($students);
echo"Array sorted in Descending order:<br>";
print_r($students);
?>
