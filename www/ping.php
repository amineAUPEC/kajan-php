<html>
<head> <title> ping</title> </head>
<body>
<form enctype="multipart/form-data" method="get">
    <fieldset>
            <p>
                <label>Saisir une IP :</label>
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
$ip_value=$_GET['ip'];

echo "<br>";
exec("ping -c 4 -W 2 " . $_GET['ip'], $output);
print_r($output);


?>