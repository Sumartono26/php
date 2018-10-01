<?php
$kiri=$_POST["tono1"];
$operator=$_POST["tono2"];
$kanan=$_POST["tono3"];
if ($operator== "-"){
	$hasil=$kiri-$kanan;
}
if ($operator== "+"){
	$hasil=$kiri+$kanan;
}

if ($operator== "/"){
	$hasil=$kiri/$kanan;
}

if ($operator== "x"){
	$hasil=$kiri*$kanan;
}

if ($operator== "%"){
	$hasil=$kiri%$kanan;
}
echo "Hasilnya :".$kiri." ".$operator." ".$kanan."=".$hasil;
?>