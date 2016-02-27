<html>
<?php session_start(); ?>
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
p {font-size: 15px; font-style: oblique; font-weight: italic; font-weight: bold;}
</style>
<link rel="Stylesheet" type="text/css" href="https://v-ie.uek.krakow.pl/~s176968/style2.css" />
</head>
<body>

 <div id="container1">
 <div id="title">
 <h1><font face="fantasy" color="#8C1717" size="10"> Wypożyczalnia samochodów</font></h1>
 </div>
 <div id="login">
 <?php 
 if (isset($_SESSION['login'])) { ?>
 <h2><u>Jesteś zalogowany</u></br></h2>
 <form action="logout1.php" method='post' align="right" vspace="50">
<input type="image" name="logout" width="120" height="30" align="middle" src="http://g.gazetaprawna.pl/gp/img_flamenco/whitePage/buttonLogout.png"></input>
</form>
 <?php ;} else { ?>
		<h2><u>Logowanie użytkownika</u></br></h2>
		<p><form method="POST" action="log.php"></p>
		<p>Login:<input type="text" name="login"
		style="background-color: #BDB76B"/></p>
		<p>Hasło:<input type="password" name="haslo" style="background-color: #BDB76B"/>
		<input type="image" width="40" height="40" align="right" hspace="20" src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons-256/simple-red-square-icons-business/128632-simple-red-square-icon-business-key11-sc48.png"/>
		</p></form></br> <?php ;}?>
 </div>
</div>

<div id="container2">
<div id="main">
 <ul id="menu">
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/main2.php">Strona główna</a></li>
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/sklep2.php">Sklep</a></li>
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/koszyk2.php">Koszyk</a></li>
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/kontakt2.php">Kontakt</a></li>
</ul></br>
<div id="two">Kontakt
</div>
</div>
<div id="reklama">
<p></p>
</div>
</div>

<div id="stopka">
<h2>Speed <sup>&reg</sup></h2>
</div>
</body>
</html>
