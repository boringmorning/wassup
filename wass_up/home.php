﻿<?php
session_start();

require_once('login.php');
$dsn = 'mysql:host=localhost;dbname=wassup';
$dbh = new PDO($dsn,$CFG['username'],$CFG['pw']);

if (isset($_SESSION['login'])=='') {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home|WassUp!</title>
</head>
<frameset rows="6*,1*">
    <frameset cols="1*,5*">
        <frame src="left.php" name="left">
        <frame src="yellow.php" name="right">
    </frameset>
    <frame src="music.html" name="music"></frame>
</frameset>
</html>