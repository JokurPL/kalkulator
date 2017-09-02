<?php  include( 'session.php' ); 
	$links = $pdo->query('SELECT * FROM `imgs`');
	$q = $pdo->query('SELECT * FROM `pytania`');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	 <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=jrjc7e0xuvmi98ya39hwwcxx2jw0x6qmyo9fguc0c3ue4pg1"></script>  -->
  </script>
</head>
<body>

	<div class="container">
		<h1>Dodaj pytanie do quizu! <hr></h1>
		<form method="post" action="saveq.php"> 
			<label for="tresc">Podaj wzór na:</label>
			<input type="text" class="form-control" name="tresc" id="tresc">
			<label for="a">Odp. A (link do zdjęcia)</label>
			<input type="text" class="form-control" name="a" id="a">
			<label for="b">Odp. B (link do zdjęcia)</label>
			<input type="text" class="form-control" name="b" id="b">
			<label for="c">Odp. C (link do zdjęcia)</label>
			<input type="text" class="form-control" name="c" id="c">
			<label for="d">Odp. D (link do zdjęcia)</label>
			<input type="text" class="form-control" name="d" id="d">
			<label for="ok">Wpisz poprawna odp.</label>
			<input type="text" class="form-control" name="ok" id="ok">

	    	<br>
	    	<button class="btn btn-primary btn-lg">Dodaj!</button>
	  	</form>		<br>	
	  	<h2>Pytania, które już są<hr></h2>
	  	<?php foreach ($q->fetchAll() as $value) {

	  		echo '<div class="container"><blockquote class="bg-info"><h3> Podaj wzór na ' . $value['tresc'] . '</h3></blockqoute</div></div>';
	  	} ?>
		<?php 

			foreach ($links->fetchAll() as $value) {
				echo '  	
				<div class="row">
		  			<div class="col-sm-6 center text-center">
		    			<div class="thumbnail">
		    				<div class="caption">
		        				<h3><strong>'. $value['link'].'</strong></h3>
		      	</div>
		      				<img width="200" height="200" src="' . $value['link'] . '">
		    		</div>
		  				</div>
							';
			}

		 ?>
		 </div>

  	<hr>
  	<?php include('body.php'); ?>
</body>
</html>