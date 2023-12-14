<?php
$array = array("A" => 1, "B" => 2, "C" => 3, "D" => 4, "E" => 5);

$array_keys = array_keys($array);
for ($i = count($array_keys) - 1; 0 <= $i; $i--) {
    echo $array_keys[$i] . " = " . $array[$array_keys[$i]] . " ";
}
