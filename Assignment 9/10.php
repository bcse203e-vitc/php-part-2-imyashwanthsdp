<?php
$lines = file("students.txt", FILE_IGNORE_NEW_LINES);
echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Age</th></tr>";
foreach ($lines as $line) {
    $parts = explode(",", $line);
    if (count($parts) != 3 || !preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/", $parts[1])) {
        file_put_contents("errors.log", $line . "\n", FILE_APPEND);
        continue;
    }
    $age = date("Y") - date("Y", strtotime($parts[2]));
    if (date("md", strtotime($parts[2])) > date("md")) $age--;
    echo "<tr><td>{$parts[0]}</td><td>{$parts[1]}</td><td>$age</td></tr>";
}
echo "</table>";
?>

