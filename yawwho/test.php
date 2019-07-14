<?php
$servername = "localhost";
$username   = "VendeurVendu";
$password   = "Simplon974!";
$dbname     = "YaWho";
$gg='null';
$tab=array();
$qst3= rand(1, 33);
$conn = new mysqli($servername, $username, $password, $dbname);
$tab[]=$qst3;

if (in_array($qst3, $tab)) {
    echo 'true';
}else{
    
    echo 'false';
}

?>