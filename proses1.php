<?php
$kiri=$_POST["tono1"];
$operator=$_POST["tono2"];
$kanan=$_POST["tono3"];
if ($operator== "=="){
	if ($kiri==$kanan)
		print "true";
		else 
			(print "false");
}
if ($operator== "<"){
	if ($kiri<$kanan)
		print "true";
		else 
			(print "false");
}
if ($operator== ">"){
	if ($kiri>$kanan)
		print "true";
		else 
			(print "false");
}
if ($operator== "<="){
	if ($kiri<=$kanan)
		print "true";
		else 
			(print "false");
}
if ($operator== ">="){
	if ($kiri>=$kanan)
		print "true";
		else 
			(print "false");
}
if ($operator== "!="){
	if ($kiri!=$kanan)
		print "true";
		else 
			(print "false");
}
?>