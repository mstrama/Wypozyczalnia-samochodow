
<?php

$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
$db = mysql_select_db('s176968', $connection);
mysql_select_db('s176968');


    $haslo = $_POST['haslo'];
	$haslo1 = $_POST['haslo1'];
	$login = $_POST['login'];

	
	if ($haslo&&$haslo1&&$login){
		if ($haslo===$haslo1) {
		 mysql_select_db('s176968');
		 $query1 = "insert into `users` (login, password) values ('$login', '$haslo')";
		 $result1 = mysql_query($query1);
		 
		 
		 session_start();
		$_SESSION['haslo'] = $haslo;
		$_SESSION['login'] = $login;
		include'main2.php';
		 
		} else header('Location: index2.php');
	} else header('Location: index2.php');
?>
