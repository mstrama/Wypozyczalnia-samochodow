<?php

$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
$db = mysql_select_db('s176968', $connection);
mysql_select_db('s176968');

$liczbadni = $_POST['liczbadni'];
$id = $_POST['id'];
$cena = $_POST['cena'];
$koszt = $liczbadni * $cena;


$query1 = "UPDATE `koszyk` SET liczbadni='$liczbadni' WHERE id='$id'";
$result1 = mysql_query($query1);

$query2 = "UPDATE `koszyk` SET total='$koszt' WHERE id='$id'";
$result2 = mysql_query($query2);

echo $liczbadni;
echo $id;
echo $cena;
echo $koszt;
header('Location: koszyk2.php');

?>
