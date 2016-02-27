<?php
$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
$db = mysql_select_db('s176968', $connection);
mysql_select_db('s176968');


    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    mysql_select_db('s176968');
	

	$query1 = "select * from `users` where login = '$login' && password = '$haslo'";
	$result1 = mysql_query($query1);

	
$row = mysql_fetch_row($result1);

$uzytkownik = "$row[0]$row[1]";
$uzytkownik1 = "$login$haslo";

if ($uzytkownik&&$uzytkownik1) {
		if($uzytkownik==$uzytkownik1) {
			session_start();
			$_SESSION['haslo'] = $haslo;
			$_SESSION['login'] = $login;
			header('Location: main2.php');
			
}
else {
   header('Location: index2.php');
   }
 } else header('Location: index2.php');
?>
