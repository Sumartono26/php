<?php
$kiri=$_POST["tono1"];
$operator=$_POST["tono2"];
$kanan=$_POST["tono3"];
if ($operator== "and"){
	if ($kiri =="True" And $kanan=="True")
		print "true";
		else 
			(print "false");
}
if ($operator== "or"){
	if ($kiri=="True" or $kanan=="True")
		print "True";
		else 
			(print "false");
}
if ($operator== "xor"){
	if ($kiri=="True" xor $kanan=="True")
		print "True";
		else 
			(print "false");
}
if ($operator== "!"){
	if ($kiri=="True" ){
		print "false";
	}
	else if ($operator=="!") {
			if(!$kiri=="False"){
				(print "true");
			}
			else
				(print "true");
		}
}
?>