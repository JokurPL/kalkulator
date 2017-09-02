<?php 
	include('session.php');
		$id = $_POST['id'];

	$update = $pdo->prepare('UPDATE `news` SET `nr`= :nr,`tresc`= :tresc WHERE `id` = :id');
  			$update->bindParam('nr', $_POST['nr']);
  			$update->bindParam('tresc', $_POST['tresc']);
  			$update->bindParam('id', $id);
  			$update->execute();
  			header('location: admin.php');

 ?>