<html>
<meta charset="windows-1250"/>
<meta charset="ISO-8859-2"/>
<meta charset="UTF-8"/>
<head>
<title>
 Speed &#9762
</title>

<style>
h1 {font-size: 55px; display: inline; text-indent: 600; word-spacing: 20;margin-left: 150}
h2 {text-align: center;}
p {font-size: 15px; font-style: oblique; font-weight: italic; font-weight: bold; color: white;}
div#two { padding: 40;}

</style>
<link rel="Stylesheet" type="text/css" href="https://v-ie.uek.krakow.pl/~s176968/style2.css" />
</head>
<body>

<div id="container1">
 <div id="title">
 <h1><font face="fantasy" color="#8C1717" size="10"> Wypożyczalnia samochodów</font></h1>
 </div>
 </div>
 
<div id="container2">
<div id="two">
<form action="register.php" method='post'>
<p>Login</p>
<input type="text" name="login" size="20"
 style="background-color: #BDB76B"/> <br />
<p>Hasło</p>
<input type="password" name="haslo" size="20"
 style="background-color: #BDB76B"/> <br/>
<p>Powtórz hasło</p>
<input type="password" name="haslo1" size="20"
 style="background-color: #BDB76B"/> <br/>
</br><input type="submit" name="submit" value="rejestracja" />
</form>
</div>
</div>

<?php
   
    $haslo = $_POST['haslo'];
	$haslo = $_POST['haslo'];
	echo $haslo1;
	echo $haslo;
	
?>
</body>


</html>
