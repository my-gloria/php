<?php
for ($row=1;$row<=5; $row++){
    for ($star=1; $star<=$row; $star++){
        echo "*";
    }
    echo "<br>";
}
for ($row=5; $row>=1; $row--){
    for ($star=1; $star<=$row; $star++){
        echo "*";
    }
    echo "<br>";
}
?>