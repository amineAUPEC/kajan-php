<html>
<head> <title> ok</title> </head>
<body>
<form enctype="multipart/form-data" method="get">
    <fieldset>
            <p>
                <label>Saisir une IP :</label>
                <!-- <input name="ip" type="text"/> -->
                <input name="ip" type="text" id="ip"/>
                <input type="submit" name="submit" value="soumettre" />
            </p>
   </fieldset>
</form>

</body>
</html>
<?php


echo '<pre>';
echo "L IP est : ";
echo $_GET['ip'];
$ip_value=isset($_GET['ip']);
$ip_value=$_GET['ip'];
 // Affiche le résultat de la commande "ls" et retourne
 // la dernière lignes dans $last_line. Stocke la valeur retournée
 // par la commande shelle dans $retval.
 $last_line = system("ls $ip_value", $retval);
//  $last_line = system('ping 192.168.1.23 c 4 -w 2', $retval);
//  $last_line = system('ls', $retval);
 // Affichage d'autres informations
 echo '
</pre>
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ' . $retval;
?>