<?php
$jari2 = 14;
$tinggi = 10;
const phi = 22/7;

function luas_lingkaran($jari2){
  return phi * $jari2 * $jari2;
}

function keliling_lingkaran($jari2){
  return phi*$jari2*2;
}

function luas_tabung($tinggi, $jari2){
  return round(($tinggi*keliling_lingkaran($jari2))+luas_lingkaran($jari2));
}

echo "<br> <h4>Tugas menghitung Luas Tabung</h4>";
echo "<br> Jadi Volume dari tabung tersebut adalah : ", number_format(luas_tabung($tinggi, $jari2), 2);
?>
