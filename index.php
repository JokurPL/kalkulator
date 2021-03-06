<?php include('head.php'); 

	include('db.php');

	$news = $pdo->query('SELECT * FROM `news` ORDER BY `news`.`id` DESC');
	$com = $pdo->query('SELECT * FROM `com` ORDER BY `com`.`id` DESC');
	$icom = $pdo->query( 'SELECT COUNT( id ) as cnt FROM com' )->fetch()['cnt'];
?>
<body>
<div class="container">
	<div class="row">
		<h1>Kalkulator <a href="admin.php" class="btn btn-sm btn-primary">Panel Administratora</a></h1>
		<hr>
	</div>
	<form class="form" action="licz.php" method="post">
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">Podaj 1 liczbę</span>
		  <input type="number" name="fnum" placeholder="Przeczytaj opisy funkcji" class="form-control" id="basic-url" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon2">Podaj 2 liczbę</span>
		  <input type="number" placeholder="Przeczytaj opisy funkcji" name="snum" class="form-control" id="basic-url" aria-describedby="basic-addon2">
		</div>
		<br>
		<div class="input-group">
		 	<div class="form-group">
			  <label for="func">Wybierz funkcję:</label>
			  <select name="fun" class="form-control" id="func">
			    <option>Dodaj</option>
			    <option>Odejmij</option>
			    <option>Podziel</option>
			    <option>Pomnóż</option>
			    <option>Potęguj</option>
			    <option>Pierwiastek</option>
			  </select>
			</div>
		</div>
		<br>
		<div class="input-group">
			<input class="btn btn-lg btn-primary" value="Oblicz" type="submit">
		</div>

	</form>
	<div class="row">
			<h1>Losowanie:</h1>
	<hr>
	</div>
	<form action="los.php" method="post">	
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon2">Podaj liczbę od, której chcesz zacząć losować</span>
		  <input type="number" name="flos" class="form-control" id="basic-url" aria-describedby="basic-addon3">
		</div>
		<br>	
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon2">Podaj liczbę do, której chcesz losować </span>
		  <input type="number" name="slos" class="form-control" id="basic-url" aria-describedby="basic-addon3">
		</div>
		<br>
		<div class="input-group">
			<input class="btn btn-lg btn-success" value="Losuj" type="submit">
		</div>
	</form>

	<div class="row">
		<h1 class="text-primary">Quiz wzorów!<hr></h1>
		<p><a href="quiz.php" class="btn btn-lg btn-warning">Sprawdź siebie!</a></p>
	</div>

	<div class="row">
		<div class="page-header">
	  		<h1>Opis funkcji:</h1>
	  		<div>
	  			<blockquote class="bg-success">
	  				<h3><strong>Dodaj</strong></h3>
	  				<p>Dodaje 1 liczbę do 2 np. <code>2 + 2 = 4</code></p>
	  			</blockquote>
	  		</div>
	  		<div>
	  			<blockquote class="bg-info">
	  				<h3><strong>Odejmij</strong></h3>
	  				<p>Odejmuję 1 liczbę od 2 np. <code>2 - 2 = 0</code></p>
	  			</blockquote>
	  		</div>
	  		<div>
	  			<blockquote class="bg-success">
	  				<h3><strong>Podziel</strong></h3>
	  				<p>Dzieli 1 liczbę przez 2 np. <code>2 : 2 = 1</code></p>
	  			</blockquote>
	  		</div>
	  		<div>
	  			<blockquote class="bg-info">
	  				<h3><strong>Pomnóż</strong></h3>
	  				<p>Mnoży 1 liczbę przez 2 np. <code>2 x 2 = 4</code></p>
	  			</blockquote>
	  		</div>
	  		<div>
	  			<blockquote class="bg-success">
	  				<h3><strong>Potęguj</strong></h3>
	  					<p>Podnosi 1 liczbę do potęgi podanej jako 2 liczba np. <code>2^2 = 4</code></p>
	  			</blockquote>
	  		</div>
	  		<div>
	  			<blockquote class="bg-info">
	  				<h3><strong>Pierwiastkowanie</strong></h3>
	  					<p>Zwraca pierwiastek stopnia tego, którego podano w drugim polu np. <code>Pierwiastek stopnia kwadratowego (2) | 144 = √<?php echo sqrt(144); ?> </code></p>
	  			</blockquote>
	  		</div>
		</div>
	</div>

	<div class="row">
		<h1>Aktualności <hr></h1>
		<?php foreach ($news->fetchAll() as $value) : ?>
			<div class="jumbotron">
			  <h1>Aktualizacja: <span class="text-primary"><?php echo $value['nr']; ?></span></h1>
			  <p><?php echo $value['tresc']; ?></p>
			</div>
	
	<?php endforeach; ?>
	<div class="media">
		<h1>Komentarze <hr></h1>
		<?php 
		if ($icom > 0) {
		foreach ($com->fetchAll() as $value) {
				echo '	
				<div class="media-body">
    				<h3>Autor: <strong>'. $value['autor'] .'</strong></h3>
   					<p style="font-size: 22px;">'. $value['tresc'] .'</p>
  				</div>
  				<hr>';
			} 
		} else {
			echo '<h2 class="text-danger">Brak komentarzy.<hr></h2>';
		}
		?>
		</div>
		<div class="media">
			<h2>Dodaj komentarz <hr></h2>
			<form method="post" action="addcom.php">
				<div class="input-group">
					<label style="font-size: 18px;" for="autor">Autor:</label>
					<input name="autor" type="text" id="autor" class="form-control">
				</div><br>
				<div class="input-group">
					<label style="font-size: 18px;" >Treść komentarza:</label>
					<textarea name="tresc" type="text" style="max-width: 290px; min-height:200px;" id="autor" class="form-control"></textarea>
				</div><br>
				<div class="input-group">
						<button class="btn btn-primary">Dodaj komentarz</button>
				</div>
			</form>
		</div>
  	</div>
	<hr>
	<h3>Zobacz kod - <a href="https://github.com/JokurPL/kalkulator" target="_blank">GitHub</a></h3>
	<hr>
<?php include('body.php'); ?> 
</body>
</html>