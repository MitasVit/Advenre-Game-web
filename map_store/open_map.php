<?php

$filename = $_GET["maps"];
echo($filename);
echo("<br>");
$file = file_get_contents($filename, FILE_USE_INCLUDE_PATH);
echo($file);
echo("<br><br>");


for($i = 0; $i < 10; $i++){
    $pieces_walls = explode(" ", $file, 17);
    for($y = 4; $y < 21; $y++){
        if($i == 0){
            if($pieces_walls[$y-4] == '0'){

            }else{
                $tmp = ($y - 4)*80;
                $tmp2 = $i * 80;
                echo("<img src=\"img\kamen.png\" style=\"width: 80;height: 80;left: $tmp;top: $tmp2\">");
            }
        }else{
            if($pieces_walls[$y-4] == '0'){

            }else{
                $tmp = $y*80;
                $tmp2 = $i * 80;
                echo("<img src=\"img\kamen.png\" style=\"width: 80;height: 80;left: $tmp;top: $tmp2\">");
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