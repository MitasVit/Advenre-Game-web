<?php
error_reporting(E_ERROR | E_PARSE);
$filename = $_GET["maps"];
echo($filename);
echo("<br>");
$file = file_get_contents($filename, FILE_USE_INCLUDE_PATH);
echo($file);
echo("<br><br>");

$pieces = explode(" ", $file, 174);
$walls2;
for($p =0; $p<170; $p++){
    $walls2[$p] = $pieces[$p+3];
}

$walls;
for($z =0; $z<10; $z++){
    for($o =0; $o<17; $o++){
        $walls[$z][$o]=$walls2[($z*17)+$o-1];
    }
}

for($i = 0; $i < 17; $i++){
    for($y = 0; $y < 10; $y++){
        if($walls[$y][$x] == 0){
            if($pieces_walls[$y-4] == '0'){

            }else{
                $_x = $i * 80;
                $_y = $y * 80;
                echo("<img src=\"img\kamen.png\" style=\"width: 80;height: 80;position: absolute;left: $_x;top: $_y\">");
            }
        }     
    }
}


/*

celkově: 

$pieces[0] - map width
$pieces[1] - map height

$pieces[2] - start pos x
$pieces[3] - start pos y

$pieces[4] to $pieces[174] - walls
$pieces[175] to $pieces[345] - floors
$pieces[346] to $pieces[516] - items

*/ 
?>