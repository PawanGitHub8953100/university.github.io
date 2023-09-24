<?php
global $acon;
$acon = mysqli_connect("localhost","root","vertrigo")or die(mysqli_error($acon));
$db = mysqli_select_db($acon,"university")or die(mysqli_error($acon));
?>