<?php
$array = array(1, 1, 0, 1, 1, 1);

$max = 0;
$lastMax = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == 1) {
        $max++;
    } elseif ($array[$i] == 0) {
        $max = 0;
    }
    
    if ($lastMax <= $max) {
        $lastMax = $max;
    }
}
echo ($lastMax);
