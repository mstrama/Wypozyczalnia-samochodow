<?php
session_start();
if (isset($_SESSION['login']))
session_unset($_SESSION['login']);
header('Location: index2.php');
exit();
?>
