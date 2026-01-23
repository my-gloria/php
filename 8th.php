<?php
$rows = 7; 

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= 5; $j++) { 

        if ($j == 1 || $j == 5 || ($i == 4 && $j > 1 && $j < 5)) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br>"; 
}
?>
