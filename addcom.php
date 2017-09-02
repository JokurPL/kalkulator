<?php 
	include('db.php');
	$usun = $pdo->prepare('INSERT INTO `com`(`autor`, `tresc`) VALUES ( :autor, :tresc)');
	$usun->bindParam('autor', $_POST['autor']);
	$usun->bindParam('tresc', $_POST['tresc']);
	$usun->execute();

	header('location: index.php');
	
 ?>