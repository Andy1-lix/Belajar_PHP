<?php 
$input11 = "Ayo";
$input12 = "Belajar";
$input21 = "Bersama";
$input22 = "Niomic";

echo "<h1>Operator String</h1>";

echo "<table border=1>";
echo "<tr>";
print "<th>Input 1</th>";
print "<th>Input 2</th>";
print "<th>Hasil</th>";
echo "</tr>";

echo "<tr>";
print "<td>$input11</td>";
print "<td>$input12</td>";
$gabungan1 = $input11 . $input12;
print "<td>$gabungan1</td>";
echo "</tr>";

echo "<tr>";
print "<td>$input21</td>";
print "<td>$input22</td>";
$gabungan2 = $input21 . $input22;
print "<td>$gabungan2</td>";
echo "</tr>";
echo "</table> <br><br>";

$gabungan3 = $gabungan1.$gabungan2;

echo "$gabungan3";

?>