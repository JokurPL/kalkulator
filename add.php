<?php  include( 'session.php' ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	 <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=jrjc7e0xuvmi98ya39hwwcxx2jw0x6qmyo9fguc0c3ue4pg1"></script>  -->
	 <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector: '#news',
     language: 'pl'
  });

  </script>
</head>
<body>

	<div class="container">
		<h1>Dodaj newsa! <hr></h1>
		<form method="post" action="save.php"> 
			<label for="nr">Podaj nr. aktualizacji</label>
			<input type="number" class="form-control" name="nr" id="nr">
			<label for="news"><h2>Treść newsa</h2></label>
	    	<textarea name="tresc" id="news"></textarea>
	    	<br>
	    	<button class="btn btn-primary btn-lg">Dodaj!</button>
	  	</form>			
  	<hr>
  	<?php include('body.php'); ?>
</body>
</html>