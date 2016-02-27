<html>
<?php session_start();?>
<meta charset="windows-1250"/>
<meta charset="ISO-8859-2"/>
<meta charset="UTF-8"/>

<?php
$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
$db = mysql_select_db('s176968', $connection);
mysql_select_db('s176968');


$id = $_POST['id'];
$cena24k = $_POST['cenak'];
$samochodk = $_POST['samochodk'];
$zdjk = $_POST['zdjk'];

	echo $id.' '.$samochodk.' '.$zdjk.' '.$cena24k. "</br>";


		
		 mysql_select_db('s176968');
		 $query1 = "insert into `koszyk` (zdjk, samochodk, cena24k, id) values ('$zdjk', '$samochodk', '$cena24k', '$id')";
		 $result1 = mysql_query($query1);

header('Location: koszyk2.php');

?>
</html>
