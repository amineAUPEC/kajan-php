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
$ip_value=$_GET['ip'];


exec("ping 127.0.0.1 -c 1 -w 1", $output);
// exec("ping -c 4 " . $_GET['ip'], $output);
echo "&ltpre>";
print_r($output);
echo "&lt/pre>";

?>