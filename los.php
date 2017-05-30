<?php include('head.php'); ?>
<body>	
	<div class="container">	
			<h1>Wynik losowania:</h1>
			<hr>	
		<?php 	

			include('functions.php');

			$flos = $_POST['flos'];
			$slos = $_POST['slos'];

			if (strlen($flos) < 0 || $slos <= 0) {
				echo '<h1 style="color: red;">Wybierz poprawne liczby!</h1>';
			}
			else {
				echo Los($flos,$slos);
			}

		 ?>
		 <br>	
		 		<div class="input-group">
 						<a href="index.php" class="btn btn-lg btn-danger">Powrót</a>
 				</div>
		 	<hr>	
	<?php include('body.php'); ?>
</body>