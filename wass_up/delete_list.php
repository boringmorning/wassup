<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location: index.php");
	}
	else{
		if(isset($_GET['list_name'])){
			$list_name = $_GET['list_name'];
			require_once('login.php');
			$dsn = 'mysql:host=localhost;dbname=wassup';
			$dbh = new PDO($dsn,$CFG['username'],$CFG['pw']);
			//�R�����wTable
			$inst = 'DROP TABLE '.$_SESSION['login'].'_list_'.$list_name.';';
			$sth = $dbh->prepare($inst);
			$sth->execute();
			//�q�M���`Table���R�����w�C�����
			$inst = 'delete from '.$_SESSION['login'].'_list where list_name='."'$list_name'".';';
			$sth = $dbh->prepare($inst);
			$sth->execute();
			//���s��z���譶���A�ϧ�s��Ư�Y�����
			echo "<script> parent.frames[1].location.reload(true) </script>";
		}
		//�^��Ȭw�Ʀ�]
		echo "<script> window.location='red.php?language=1' </script>";
	}
?>