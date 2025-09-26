<?php
echo date("d-m-Y H:i:s") . "<br>";
$dob = "1990-05-15";
$next = date("Y") . "-" . date("m-d", strtotime($dob));
if (strtotime($next) < time()) $next = (date("Y") + 1) . "-" . date("m-d", strtotime($dob));
$days = (strtotime($next) - time()) / 86400;
echo "Days left until next birthday: " . ceil($days);
?>

