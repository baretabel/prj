<?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "YaWho";
$nom = $_GET['nom'];
$pseudo = $_GET['pseudo'];

$mail = $_GET['mail'];
$mdp1 = $_GET['mdp1'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//if($mdp1==$mdp2){
$req = " INSERT INTO Profil (ID, Nom,  Pseudo, Password, Email, Point, Victoire, Partie) VALUES (null,'$nom','$pseudo','$mdp1','$mail', 0, 0, 0);";

// tester la requete sur phpmyadmin

$conn->exec($req);
header('Location: home.php');

// vérifier avec phpmyadmin
}catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
//}else{header('Location: Inscription.php');}
?>