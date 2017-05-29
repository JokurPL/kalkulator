<?php include('head.php'); ?>
<body>
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
			  </select>
			</div>
		</div>
		<br>
		<div class="input-group">
			<input class="btn btn-lg btn-primary" value="Oblicz" type="submit">
		</div>

	</form>
	<hr>
	&copy; <?php echo date('Y'); ?> by Mateusz Pietrzak 
</div>
<?php include('body.php'); ?>
</body>
</html>