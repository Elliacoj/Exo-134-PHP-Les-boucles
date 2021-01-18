<?php

// Premiere ligne
$i = 1;

while($i < 6) {
    echo $i;
    $i++;
}


//Deuxieme ligne
echo"<br><br>";

$i = 1;

 do {
     echo $i;
     $i++;
 }
 while($i < 6);

echo"<br><br>";
//Troisieme ligne
 for($x = 0; $x < 10; $x++) {
    echo $x;
}


echo"<br><br>";
//Quatrieme ligne
$colors = array("red", "green", "blue", "yellow");

 foreach($colors as $x) {
    echo $x;
}


