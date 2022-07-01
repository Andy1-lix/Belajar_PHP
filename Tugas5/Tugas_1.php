<?php 
$a = true;
$b = false;
echo "Table Logika 1111 <br> ";
// echo "<h1>Input True</h1>";
echo "<table border=1>";

print "<tr>";
print "<th>Input True</th>";
print "<th>Input 2</th>";
print "<th>AND</th>";
print "<th>or</th>";
print "</tr>";

print "<tr>";
print "<td>false</td>";
print "<td>false</td>";
$logika1 = $b && $b;
$logika2 = $b || $b;
print"<td>$logika1 </td>";
print"<td>$logika2</td>";
print "</tr>";

print "<tr>";
print "<td>false</td>";
print "<td>true</td>";
$logika3 = $b && $a;
$logika4 = $b || $a;
print"<td>$logika3</td>";
print"<td>$logika4</td>";
print "</tr>";

print "<tr>";
print "<td>true</td>";
print "<td>false</td>";
$logika5 = $a && $b;
$logika6 = $a || $b;
print"<td>$logika5</td>";
print"<td>$logika6</td>";
print "</tr>";

print "<tr>";
print "<td>true</td>";
print "<td>true</td>";
$logika7 = $a && $a;
$logika8 = $a || $a;
print"<td>$logika7</td>";
print"<td>$logika8</td>";
print "</tr>";

echo "</table>";

?>