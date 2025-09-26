<?php
$file = "data.txt";
$backup = pathinfo($file, PATHINFO_FILENAME) . "_" . date("Y-m-d_H-i") . "." . pathinfo($file, PATHINFO_EXTENSION);
copy($file, $backup);
echo "Backup created: $backup";
?>

