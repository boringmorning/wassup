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
        <title>Home | WassUp!</title>
        <link rel="shortcut icon" href="https://imgur.com/G4KMHP3.png" type="image/x-icon" />

    </head>
<<<<<<< HEAD
    <frameset rows="8*,80*,10*" border="2" bordercolor=black>
        <frame src="search.php" name="top" noresize="noresize">
=======
    <frameset rows="8*,80*,10*" border="2" bordercolor=black >
        <frame src="search.php" name="top">
>>>>>>> 15303e2f75febdc76823f768ab977d75f1a3a8fe
        <frameset cols="1*,5*">
            <frame src="left.php" name="left">
            <frame src="yellow.php" name="right">
        </frameset>
        <frame src="music.html" name="music" >
    </frameset>
</html>