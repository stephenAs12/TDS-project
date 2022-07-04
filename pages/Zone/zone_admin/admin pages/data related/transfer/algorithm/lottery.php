<?php
$name = ["Estifanos", "Aschale", "Kassa", "Lidia", "Zelalem", "Hunegnaw"];
$numbers = range(1, sizeof($name));
shuffle($numbers);
// foreach ($numbers as $number) {
//     echo "$number ";
// }


for ($i=0; $i < sizeof($name); $i++) { 
    echo "<br>";
    echo $name[$i]." ".$numbers[$i];
    echo "<br>";
}
