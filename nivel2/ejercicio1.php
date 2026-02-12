<?php
function cube($number) {
    return $number ** 3;
}

$listNum = [1, 2, 3, 4, 5];
$cubes = array_map('cube', $listNum);
print_r($cubes);
?>