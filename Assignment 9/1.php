<?php
$students = ["Rahul" => 85, "Priya" => 92, "Arun" => 78, "Meena" => 95, "Kiran" => 88];
arsort($students);
$top = array_slice($students, 0, 3, true);
echo "<table border='1'><tr><th>Name</th><th>Marks</th></tr>";
foreach ($top as $name => $marks) {
    echo "<tr><td>$name</td><td>$marks</td></tr>";
}
echo "</table>";
?>

