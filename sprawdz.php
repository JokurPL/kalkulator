<?php 

	include( 'db.php' );

	$id = $_POST['id'];
	$odp = $_POST['odp'];

	$pytanie = $pdo->prepare('SELECT `ok` FROM `pytania` WHERE `id` = :id');
	$pytanie->bindParam( ':id', $id );
    $pytanie->execute();
	
?> 
<?php include('head.php');?>
	<div class="container">
		<h1>Wynik: <hr></h1>
		<div class="row">
		<div class="container">
		<?php
			foreach ($pytanie->fetch() as $value) {
				if ($odp != $value) {
					echo '<p class="bg-danger"><h1 class="text-danger bg-danger" style="padding: 1%; text-align: center; font-size: 72px;">Źle! <br> Prawidłowa odpowiedź to:<span style="text-transform: uppercase;" class="text-success"> '.$value. '</span>, a twoja to <span style="text-transform: uppercase;" class="text-warning"> '.$odp.'</span>.</h1></p>';
				}
				else {
					echo '<h1 class="text-success bg-success" style="padding: 1%; text-align: center; font-size: 72px;">Dobrze!</h1>';
				}
		}	

			 ?>
			 <p><a href="index.php" class="btn btn-lg btn-danger">Powrót</a></p>
			 <p><a href="quiz.php" class="btn btn-lg btn-warning">Jeszcze raz</a></p>
		</div></div>
<?php include('body.php'); ?>