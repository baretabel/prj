<?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "YaWho";
session_start();
$log=$_SESSION['log'];
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    $sql="SELECT Pseudo, Point, Victoire, Partie  FROM Profil WHERE Nom= '$log'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $_SESSION['psd']=$row['Pseudo'];
        $_SESSION['pnt']=$row['Point'];
        $_SESSION['vct']=$row['Victoire'];
        $_SESSION['prt']=  $row['Partie'];  }


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lacement.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="form.js"></script>

    <title>YAWHO-Commencez</title>
</head>

<body>
    <header>
        <div class="tout" >
            <div class="titre"> YAWHO </div>
            <div class="card"id="tt">
                <div class="compte">
                    <div class="le1" >
                        <h3 ><?php echo(  $_SESSION['psd'])?></h3>
                    </div>
                <span class="le2" onclick="aff()"> <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                    viewBox="0 0 172 172" style=" fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#ffffff">
                            <path
                                d="M86,6.90688c-43.65602,0 -79.12,35.46398 -79.12,79.12c0,41.63931 32.27171,75.80172 73.1336,78.87141c0.08056,0.00655 0.16115,0.01386 0.24187,0.02015c1.9,0.13691 3.80998,0.22844 5.74453,0.22844c1.93455,0 3.84453,-0.09153 5.74453,-0.22844c0.08072,-0.0063 0.16131,-0.01361 0.24187,-0.02015c40.86189,-3.06969 73.1336,-37.2321 73.1336,-78.87141c0,-43.65602 -35.46398,-79.12 -79.12,-79.12zM86,13.78688c39.93779,0 72.24,32.3022 72.24,72.24c0,19.71706 -7.89544,37.55193 -20.6736,50.57875c-5.46671,-3.98083 -12.22246,-6.35558 -18.275,-8.47906c-7.16896,-2.5112 -13.95113,-4.89168 -15.82937,-9.03c-0.29584,-3.53288 -0.2694,-6.29176 -0.24188,-9.46l0.00672,-1.34375c3.05472,-2.9068 6.89623,-9.04167 8.21031,-14.70735c2.2704,-1.21088 5.04643,-4.11354 5.87891,-11.06578c0.41624,-3.45032 -0.56572,-6.12245 -1.94172,-7.91469c1.8576,-6.3812 5.55361,-22.53555 -0.92047,-32.96219c-2.73824,-4.40664 -6.87027,-7.18686 -12.30203,-8.28422c-3.05128,-3.77712 -8.80925,-5.83859 -16.50797,-5.83859c-11.69944,0.21672 -20.27622,3.80018 -25.4775,10.64922c-6.13352,8.084 -7.29248,20.29804 -3.45344,36.32156c-1.42072,1.79224 -2.44546,4.50307 -2.02234,8.02219c0.83592,6.95224 3.60179,9.8549 5.87219,11.06578c1.31408,5.67256 5.15215,11.80726 8.21031,14.71406l0.00672,1.31015c0.02752,3.182 0.05396,5.94696 -0.24188,9.4936c-1.88512,4.14864 -8.69992,6.55503 -15.90328,9.09719c-6.0162,2.12442 -12.73196,4.50283 -18.18765,8.43203c-12.78804,-13.02829 -20.68703,-30.87322 -20.68703,-50.59891c0,-39.93779 32.30221,-72.24 72.24,-72.24z">
                            </path>
                        </g>
                    </g>
                </svg>
    </span>
        </div>
        <div class="score"></div>
        <div class="party">SCORE: <br><?php echo(  $_SESSION['pnt'])?></div>
        <div class="party"> PARTIES JOUÉS:<br> <?php echo(  $_SESSION['prt'])?></div>
        <div class="party">PARTIES GAGNÉES: <br> <?php echo(  $_SESSION['vct'])?></div>
        <div class="party"><button class="bouton2">Deconnexion</button></div>
       

        </div>
        </div>

        
       
    </header>

    <div class="contenaire">
        <div class="theme">
            <h2>THEME:</h2>
            <img src="images/disney.png" height="200px" width="280px">
        </div>
        <div class="jouer"> <button> JOUER</button></div>
    </div>

</body>

</html>