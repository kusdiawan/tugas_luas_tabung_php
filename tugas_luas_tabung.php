<?php
$jari2 = 14;
$tinggi = 10;
const phi = 22/7;


function luas_tabung($jari2, $tinggi){
  $luas = 2 * phi * $jari2 * ($jari2 * $tinggi);
  return round($luas);
}

echo "<br> <h4>Tugas menghitung Luas Tabung</h4>";
echo "<br> Jadi Volume dari tabung tersebut adalah : ", number_format(luas_tabung($tinggi, $jari2), 2);
?>

