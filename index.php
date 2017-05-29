<?php include('head.php'); ?>
<body style="background: #F1F1F1">
<div class="container">
	<div class="row">
		<h1>Kalkulator</h1>
		<hr>
	</div>
	<form class="form" action="licz.php" method="post">
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">Podaj 1 liczbę</span>
		  <input type="number" name="fnum" class="form-control" id="basic-url" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon2">Podaj 2 liczbę</span>
		  <input type="number" placeholder="Jeśli wybrałeś opcję Potęgowania wpisz wartość do potęgowania np. 3" name="snum" class="form-control" id="basic-url" aria-describedby="basic-addon2">
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
	  					<p>Zwraca pierwiastek kwadratowy 1 i 2 liczby np. <code>144 = √<?php echo sqrt(144); ?> | 9 = √<?php echo sqrt(9); ?> </code></p>
	  			</blockquote>
	  		</div>
		</div>
	</div>

	<h3>Zobacz kod - <a href="https://github.com/JokurPL/kalkulator" target="_blank">GitHub</a></h3>
	<hr>
	&copy; <?php echo date('Y'); ?> by Mateusz Pietrzak  
</div>
<?php include('body.php'); ?> 
</body>
</html>
