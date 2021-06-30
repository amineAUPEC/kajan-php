<html>
<head> <title> auth</title> </head>
</html>
<?php


echo '<pre>';
echo "Le fichier auth.log contient : ";

echo "<br>";
exec("cat /var/log/auth.log ", $output);
print_r($output);


?>