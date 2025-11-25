<?php

$count = 0;

for ($x = 1; $x <= 23; $x++) {        // minimal sisa untuk y+z adalah 2
    for ($y = 1; $y <= 24 - $x; $y++) {
        $z = 25 - ($x + $y);

        // z harus bilangan asli
        if ($z >= 1) {
            echo "x = $x, y = $y, z = $z<br>";
            $count++;
        }
    }
}

echo "<br>Total pasangan: $count";

?>
