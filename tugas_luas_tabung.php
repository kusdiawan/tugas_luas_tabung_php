<?php
$jari2 = 14;
$tinggi = 10;
const phi = 22/7;

function pow_luas_alas($jari2, $pangkat){
	return pow($jari2, $pangkat);
}


echo "<br> <h4>Tugas menghitung Luas Tabung</h4>";
echo "<br> Jadi Volume dari tabung tersebut adalah : ", number_format(phi *(pow_luas_alas($jari2, 2)) * $tinggi, 2);
?>