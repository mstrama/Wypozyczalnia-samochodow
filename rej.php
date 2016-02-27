<html>
<meta charset="windows-1250"/>
<meta charset="ISO-8859-2"/>
<meta charset="UTF-8"/>
<title>
 Speed &#8230
</title>

<style>

h1 {font-size: 55px; display: inline; text-indent: 300; word-spacing: 20; margin-top: 50;margin-left: 150}
h2 {font-size: 15px; display: inline; text-indent: 1100; word-spacing: 5; margin-top: 0;text-indent: 1000;margin-left: 400}
body {background-size: cover; background-image: url("https://v-ie.uek.krakow.pl/~s176968/world.jpg");}
p {font-size: 15px; font-style: oblique; font-weight: italic; font-weight: bold; text-indent: 50; word-spacing: 1;}

</style>
<head>
<h1><font face="fantasy" color="maroon" size="10"> Wypożyczalnia samochodów</font></h1>
 
 
  <body>
<p style="margin-top: 100">
Utwórz nowe konto użytkownika:
<form action="rejestracja.php" method='post'> </p>
<p>Login
<input type="text" name="login" size="20"
 style="background-color: #BDB76B"/> <br /></p>
<p>Hasło
<input type="password" name="haslo" size="20"
 style="background-color: #BDB76B"/> <br /> </p>
<p>Powtórz hasło
<input type="password" name="haslo1" size="20"
 style="background-color: #BDB76B"/> <br /></p>
<input type="submit" name="submit" value="rejestracja" />
</form>

<?php
   
    $haslo = $_POST['haslo'];
	$haslo = $_POST['haslo'];
	echo $haslo1;
	echo $haslo;
	
?>
 
 
 
 
 
 </head>
 </html>
