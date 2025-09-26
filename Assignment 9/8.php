<?php
$text = file_get_contents("data.txt");
preg_match_all("/[6-9]\d{9}/", $text, $matches);
if (!empty($matches[0])) {
    file_put_contents("numbers.txt", implode("\n", $matches[0]));
    echo "Numbers extracted successfully!";
} else {
    echo "No numbers found!";
}

$file = __DIR__ . "/numbers.txt";
if (file_put_contents($file, implode("\n", $matches[0])) !== false) {
    echo "Numbers extracted successfully! File created at: $file";
} else {
    echo "Failed to create file: $file";
}

?>


