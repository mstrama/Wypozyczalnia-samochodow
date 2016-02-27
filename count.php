<html>

<?php
$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
$db = mysql_select_db('s176968', $connection);
mysql_select_db('s176968');

mysql_select_db('s176968');
$query1 = "delete from `koszyk` where idk is not null";
$result1 = mysql_query($query1);

header('Location: sklep2.php');
?>
</html>
