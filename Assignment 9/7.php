<?php
class ArrayException extends Exception {}
function average($arr) {
    if (empty($arr)) throw new ArrayException("No numbers provided");
    return array_sum($arr) / count($arr);
}
try {
    echo average([10, 20, 30, 40, 50]);
} catch (ArrayException $e) {
    echo $e->getMessage();
}
?>

