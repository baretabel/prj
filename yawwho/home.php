<?php
session_start ();
$_SESSION["loga"]=$_SESSION["log"];
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link  href="dalek/DalekPinpointBold.ttf">
    <title>YAWHO</title>
</head>
<?php  echo($_SESSION['sty'])?>
<body>
    <header> <div class="titre"> YAWHO </div></header>
    <div class="contenaire">
      <div class="teaser">
          <div class="regle"></div>
      </div> 
     
     <div class="connexion">
         <div class="cotoi"><h3>Connecte-Toi</h3></div>
         <div class=" login">
             <div class="emote">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAACagAAAmoBSAN88gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAE+SURBVEiJ7daxSsNQGMXx8wkFdRFFwUVwqM4OTrpbnET0LUTooKtv4OAT+AAWnKU+geDiJgUHcXGog6IRh/5dUmhDmnzX3oBDz5ov55fc3IRIk/zHAKvABfAEvAEvwDWwXiW6DyTk5xVoAsux0TXgcwQ6mGcvPuW0jyXNOuZWJB05O8sDPDrutp8HT6c54UTStPM6381srmzIu9Qfzjl3vPB9QOddTPgnAP6OCW8GwBsx4VYAfBUwWx6g7XiVbqKiKbzrgHeiwyl+XoCehXS5PiAZnNwis6Au7+aKniAYOCw4djD+5QwX1oAG0AJ6Bc+4l840gNo44DZwCXQduzmbbnruVgi4BNz+ARuVNrBYhi4AnYhoPx1gftDKbq5TSXX38vhTl3RSBO9VgOZ2D730wJekmYrgxMw8/22TxM0vvuRSbKYqefoAAAAASUVORK5CYII="> <br> <br>
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMjYiIGhlaWdodD0iMjYiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iI2ZmZmZmZiI+PGcgaWQ9InN1cmZhY2UxIj48cGF0aCBkPSJNMTA1Ljg0NjE1LDBjLTE0LjYyNjIsMCAtMjcuMjYyNjIsNi4wNzI3MiAtMzUuMTQ0MjMsMTUuOTE4MjdjLTcuODgxNjEsOS44NDU1NSAtMTEuMTYzNDYsMjIuNjExMTggLTExLjE2MzQ2LDM2LjM4NDYydjcuMjM1NThoMTkuODQ2MTV2LTcuMjM1NThjMCwtMTAuNDM5OSAyLjU4NDEzLC0xOC42NTc0NSA2LjgyMjEyLC0yMy45ODA3N2M0LjIzNzk4LC01LjMyMzMxIDEwLjAwMDYsLTguNDc1OTYgMTkuNjM5NDIsLTguNDc1OTZjOS42NjQ2NywwIDE1LjQwMTQ0LDIuOTcxNzYgMTkuNjM5NDIsOC4yNjkyM2M0LjIzNzk4LDUuMjk3NDcgNi44MjIxMiwxMy42MTgzOSA2LjgyMjEyLDI0LjE4NzV2Ny4yMzU1OGgxOS44NDYxNXYtNy4yMzU1OGMwLC0xMy44NTA5NiAtMy40ODg1OCwtMjYuNzQ1NzkgLTExLjM3MDE5LC0zNi41OTEzNWMtNy44ODE2MSwtOS44NDU1NSAtMjAuMzM3MTQsLTE1LjcxMTU0IC0zNC45Mzc1LC0xNS43MTE1NHpNNTkuNTM4NDYsNjYuMTUzODVjLTEwLjk1NjczLDAgLTE5Ljg0NjE1LDguODg5NDIgLTE5Ljg0NjE1LDE5Ljg0NjE1djY2LjE1Mzg1YzAsMTAuOTU2NzMgOC44ODk0MiwxOS44NDYxNSAxOS44NDYxNSwxOS44NDYxNWg5Mi42MTUzOGMxMC45NTY3MywwIDE5Ljg0NjE1LC04Ljg4OTQyIDE5Ljg0NjE1LC0xOS44NDYxNXYtNjYuMTUzODVjMCwtMTAuOTU2NzMgLTguODg5NDIsLTE5Ljg0NjE1IC0xOS44NDYxNSwtMTkuODQ2MTV6TTEwNS44NDYxNSw5OS4yMzA3N2M3LjMxMzEsMCAxMy4yMzA3Nyw1LjkxNzY3IDEzLjIzMDc3LDEzLjIzMDc3YzAsNC44ODQwMSAtMi42NjE2Niw5LjA3MDMxIC02LjYxNTM4LDExLjM3MDE5djE1LjA5MTM1YzAsMy42NDM2MyAtMi45NzE3Niw2LjYxNTM4IC02LjYxNTM4LDYuNjE1MzhjLTMuNjQzNjMsMCAtNi42MTUzOCwtMi45NzE3NiAtNi42MTUzOCwtNi42MTUzOHYtMTUuMDkxMzVjLTMuOTUzNzIsLTIuMjk5ODggLTYuNjE1MzgsLTYuNDg2MTggLTYuNjE1MzgsLTExLjM3MDE5YzAsLTcuMzEzMSA1LjkxNzY3LC0xMy4yMzA3NyAxMy4yMzA3NywtMTMuMjMwNzd6Ij48L3BhdGg+PC9nPjwvZz48L2c+PC9zdmc+">
        </div>
           <form action="login.php" method="POST">  <div class="barre">
         <div class="premierebarre">   <input type="text" name="login" required="required" value="<?php echo($_SESSION['val'])?>"> </input> </div>
         <div class="deuxiemebarre" >    <input type="password" name="pwd" <?php echo($_SESSION['error']) ?> required="required"> </input> </div>
         
            </div>
            
         </div>
         <div class="bonton"> <button class="lepremier"> CONNEXION</button></div></form>
         <button class="ledeuxieme"><a href="Inscription.html">INSCRIPTION</a></button>
     </div>
    </div>
    
</body>
</html>