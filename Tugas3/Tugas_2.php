<?php 

$tabungan = 150000;
$bunga = 12.5;
$total_tabungan = $tabungan*12;
$total_bunga = $bunga*  100;

$total_semua = $total_tabungan - $total_bunga;
echo "Total Tabungan Dalam Setahun Rp.$total_semua";



?>