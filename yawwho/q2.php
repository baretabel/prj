<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "yawho";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('UTF8');
session_start();
$choix= $_SESSION['choix'];
$q1=$_SESSION['q2'];
$tab=$_SESSION['tab'];
$sql    = "SELECT Nom, Genre, Age, Vetement, Yeux, Taille, Cheveux, Peau  FROM personnage WHERE ID=$choix";
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
$sql    = "SELECT Attribut, Rep  FROM question WHERE ID=$q1";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $att = $row['Attribut'];
    $rep = $row['Rep'];
   
    
}
echo $Npers;
$chv=explode(",",$Cpers );
$tai=explode(",",$Tpers );
$vet=explode(",",$Vpers);


if($att=='Genre'){
    if($rep==$Gpers){
        echo 'Oui';
    }else{
        echo 'Non';
    }
}
if($att=='Age'){
    if($rep==$Apers){
        echo 'Oui';
    }else{
        echo 'Non';
    }
}
if($att=='Yeux'){
    if($rep==$Ypers){
        echo 'Oui';
    }else{
        echo 'Non';
    }
}
if($att=='Peau'){
    if($rep==$Ppers){
        echo 'Oui';
    }else{
        echo 'Non';
    }
}
if($att=='Taille'){
    if(in_array($rep,$tai)){
        echo 'Oui';
    }else{
        echo 'Non';
    }
}
if($att=='Cheveux'){
    if(in_array($rep,$chv)){
        echo 'Oui';
    }else{
        echo 'Non';
    }
}
if($att=='Vetement'){
    if(empty($vet)){
        echo 'Non';
    }else{
     if(in_array($rep,$vet)){
        echo 'Oui';
    }else{
        echo 'Non';
    }}
}
$qst       = rand(1, 33);
$gg='null';
while ($gg=='null') {
    if (in_array($qst, $tab)) {
        $qst= rand(1, 33);  
        
    }else{
        $sql = "SELECT Question FROM question WHERE ID= $qst";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $q1 = $row['Question'];
            $gg= $row['Question'];
            
       }
     
    }
}
echo $gg;
$_SESSION['qt2']=$gg;    
$tab[]=$qst;   
$_SESSION['tab']=$tab;    
var_dump($tab) ;

$_SESSION['cont']=$_SESSION['cont']+1;
    
header('Location: jeux.php');
    
?>