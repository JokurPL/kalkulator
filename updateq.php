<?php 
	include('session.php');
		$id = $_POST['id'];

	$update = $pdo->prepare('UPDATE `pytania` SET `tresc`= :tresc,`a`= :a, `b` = :b, `c` = :c, `d` = :d, `ok` = :ok WHERE `id` = :id');
  			$update->bindParam('tresc', $_POST['tresc']);
  			$update->bindParam('a', $_POST['a']);
  			$update->bindParam('b', $_POST['b']);
  			$update->bindParam('c', $_POST['c']);
  			$update->bindParam('d', $_POST['d']);
  			$update->bindParam('ok', $_POST['ok']);
  			$update->bindParam('id', $id);
  			$update->execute();
  			header('location: admin.php');

 ?>