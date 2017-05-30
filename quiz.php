<?php include('head.php');
	include('db.php');

					$count = $pdo->query( 'SELECT COUNT( `id` ) as cnt FROM `pytania`' )->fetch()['cnt'];
					$los = rand(1, $count);
					$pytanie = $pdo->prepare('SELECT * FROM `pytania` WHERE `id` = :id');
					$pytanie->bindParam( ':id', $los );
            		$pytanie->execute();
 ?>
	<div class="container">
		<div class="row">
			<p><h1>Quiz o wzorach <hr></h1></p>
		</div>
				<?php 



					foreach ($pytanie->fetchAll() as $value) {
					echo '<div class="container">
			<h2>Który wzór jest na <strong>' . $value['tresc'] . '</strong>?</h2>
		</div>

		<form action="sprawdz.php" method="post">
			<div class="container">
				<div class="row">
					<input type="hidden" name="id" value="' . $value['id'] .  '">
					<p class="btn btn-default">
						<input id="a" type="radio" name="odp" value="a">
						<label for="a"><img width="200" required src="' . $value['a'] .'"></label>
					</p>
					<p class="btn btn-default">
						<input id="b" type="radio" name="odp" required value="b">
						<label for="b"><img width="200" src="' . $value['b'] .'"></label>
					</p>
						<p class="btn btn-default">
						<input id="c" type="radio" name="odp" required value="c">
						<label for="c"><img width="200" src="' . $value['c'] .'"></label>
					</p>
						<p class="btn btn-default">
						<input id="d" type="radio" name="odp" required value="d">
						<label for="d"><img width="200" src="' . $value['d'] .'"></label>
					</p>';
					}
	
				?> 
				</div>
				</div><br>
				<p><button href="sprawdz.php" class="btn btn-lg btn-primary">Sprawdź</button></p>
		</form>
			<br>
			<p><a href="index.php" class="btn btn-lg btn-danger">Powrót</a></p>
		<hr>
<?php include('body.php'); ?>