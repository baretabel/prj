<?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "YaWho";
$conn = new mysqli($servername, $username, $password, $dbname);
       
       $sql = "SELECT Nom, Password  FROM Profil  ";
       $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) {
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$login_valide = $row['Nom'];
$pwd_valide = $row['Password'];
//echo ($login_valide);
      
session_start ();
$_SESSION['val']= $_POST['login'];
$_SESSION['error']='placeholder="Mot de passe incorecte"';
$_SESSION['sty']='<style> 
::placeholder { /* Firefox, Chrome, Opera */ 
    color: red; 
} 
  
:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: red; 
} 
  
::-ms-input-placeholder { /* Microsoft Edge */ 
    color: red; 
} 
</style> ';
if($_POST['login']==$login_valide ){
	$login_v=$_POST['login'];
	echo($login_v);
	
	
	if($_POST['pwd']==$pwd_valide ){
		$pwd_v = $_POST['pwd'];
		echo($pwd_v);
	
	}
}}
	$_SESSION['log']=$login_v;
// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {
	$log=$_POST['login'];
	

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_v == $_POST['login'] && $pwd_v == $_POST['pwd']) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];
		$_SESSION['error']='';
		$_SESSION['sty']='';
		// on redirige notre visiteur vers une page de notre section membre
		echo ('connecté');
		header('Location: lancement.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=home.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
} 
?>
<form action="home.html" style="visibility: hidden" method="POST">
<input name="val" value="<?php echo($_POST['login'])?>"></input>
</form>