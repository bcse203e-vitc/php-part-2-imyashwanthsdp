<?php
$logfile = __DIR__ . "/access.log";
$log = "admin - " . date("Y-m-d H:i:s") . " - Logged In\n";
if (file_put_contents($logfile, $log, FILE_APPEND) !== false) {
    $lines = file($logfile, FILE_IGNORE_NEW_LINES);
    $last = array_slice($lines, -5);
    echo "<h3>Last 5 Log Entries</h3>";
    foreach ($last as $entry) {
        echo $entry . "<br>";
    }
} else {
    echo "Failed to write log!";
}
?>


