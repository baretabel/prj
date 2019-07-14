<?php

$cont=1;
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "yawho";
$choix      = rand(1, 20);
$qst1       = rand(1, 33);
$tab=array();
$q2='null';
$q3='null';
$gg='null';

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('UTF8');

while($q2=='null'){
if (in_array($qst1, $tab)) {
    $qst1= rand(1, 33);  
}else{
    $sql = "SELECT Question FROM question WHERE ID= $qst1";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $q1 = $row['Question'];
        }
        $tab[]=$qst1; 
    $qst2= rand(1, 33);
    while($q3=='null'){
    if (in_array($qst2, $tab)) {
        $qst2= rand(1, 33);
    }else{
        $sql = "SELECT Question FROM question WHERE ID= $qst2";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $q2 = $row['Question'];
        }
        $tab[]=$qst2; 
        $qst3= rand(1, 33);
        while($gg=='null'){
            echo $gg;
        if (in_array($qst3, $tab)) {
            $qst3= rand(1, 33);
        }else{
            $sql = "SELECT Question FROM question WHERE ID= $qst3";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $q3 = $row['Question'];
                $gg=$row['Question'];
            }
            $tab[]=$qst3;
            

        }}
    }}

}}
var_dump($tab);
$sql    = "SELECT Nom, Genre, Age, Vetement, Yeux, Taille, Cheveux, Peau  FROM personnage WHERE ID= $choix";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $Npers = $row['Nom'];
    $Gpers = $row['Genre'];
    $Apers = $row['Age'];
    $Vpers = $row['Vetement'];
    $Ypers = $row['Yeux'];
    $Tpers = $row['Taille'];
    $Cpers = $row['Cheveux'];
    $Ppers = $row['Peau'];
}
session_start();
$_SESSION['q1']=$qst1;
$_SESSION['choix']=$choix;
$_SESSION['q2']=$qst2;
$_SESSION['q3']=$qst3;
$_SESSION['tab']=$tab;
$_SESSION['qt1']=$q1;
$_SESSION['qt2']=$q2;
$_SESSION['qt3']=$q3;
$_SESSION['cont']=$cont;
header('Location: jeux.php');


?>
