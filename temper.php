<?php
if (array_key_exists("temper",$_GET )) { //Takes value from sensor_tamper.py
    $temper = $_GET["temper"];
    $file=fopen("temper.txt","w"); //opens the temper.txt file
    fwrite($file, $temper); //writes the temprature value to the text file
    fclose($file); //closes the text file
    echo $temper; //displays the temprature value
} else {
    $temper = file_get_contents("temper.txt");
    echo $temper; //if no new value is in coming display last value from text file
}

?>
