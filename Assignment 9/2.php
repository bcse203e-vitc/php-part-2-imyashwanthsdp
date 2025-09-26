<?php
$lines = file("products.txt", FILE_IGNORE_NEW_LINES);
$products = [];
for ($i = 0; $i < count($lines); $i += 2) {
    $products[] = ["name" => $lines[$i], "price" => $lines[$i + 1]];
}
usort($products, fn($a, $b) => $a['price'] <=> $b['price']);
echo "<table border='1' cellpadding='0'><tr><th>Product</th><th>Price</th></tr>";
foreach ($products as $p) {
    echo "<tr><td>{$p['name']}</td><td>{$p['price']}</td></tr>";
}
echo "</table>";
?>

