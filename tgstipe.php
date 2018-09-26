<?php
$a =10;
$b =5;
$c =1;
$d =50;
$e =2;
$f =9;
$g =10;
$h =0.97;

echo "$a - $b =".($a+$b/$e)."<br>";
echo "$a - ".($b+$c); print"=".($a+$b/$e-$f)."<br>";
echo "$a - ".($b+$c); print"-".($a+$b/$e-$f);print" = $d"."<br>";
echo ($a+$c)."-".($b+$c); print"- ".($a+$b/$e-$f-$g);print"=".($d+$d+$b+$c)."<br>";
echo ($a+$c)."-".($b); print"- ".($a+$b/$e-$g-$g-$e-$c)."<br>";
echo ($a+$c+$e)."-".($b-$c); print"- ".($a+$b/$e-$g-$g+$c)."<br>";
echo ($a+$c+$e)."-".($b-$c); print"- ".($a+$b/$e-$g-$g-$e+$e+$h+$h)."<br>";
echo ($a+$e)."-".($b-$e); print"- ".($a+$b/$e-$g-$g-$e+$e+$h+$h)."<br>";
echo ($a+$c)."-".($b-$c); print"- ".($b+$c/$e); print"-".($b+$c)."<br>";
?>
