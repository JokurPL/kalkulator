<?php  include( 'session.php' ); 

	$id = $_GET['id'];

	if( $id > 0 ) {
	$sth = $pdo->prepare( 'SELECT * FROM `pytania` WHERE `id` = :id' );
	$sth->bindParam( ':id', $id );
    $sth->execute();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	 <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=jrjc7e0xuvmi98ya39hwwcxx2jw0x6qmyo9fguc0c3ue4pg1"></script>  -->
	 <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector: '#news',
     language: 'pl',
  });

  </script>
</head>
<body>

	<div class="container">
		<h1>Edytuj newsa! <hr></h1>
		<form method="post" action="updateq.php">
			<?php foreach ($sth->fetchAll() as $value):?>	
			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			<label for="t">Podaj treść</label>
			<input type="text" value="<?php echo $value['tresc']; ?>" class="form-control" name="tresc" id="t">
			<label for="a">Odp. A (link do zdjęcia)</label>
			<input type="text" value="<?php echo $value['a']; ?>" class="form-control" name="a" id="a">
			<label for="b">Odp.B (link do zdjęcia)</label>
			<input type="text" value="<?php echo $value['b']; ?>" class="form-control" name="b" id="b">
			<label for="c">Odp. C (link do zdjęcia)</label>
			<input type="text" value="<?php echo $value['c']; ?>" class="form-control" name="c" id="c">
			<label for="d">Odp. D (link do zdjęcia)</label>
			<input type="text" value="<?php echo $value['d']; ?>" class="form-control" name="d" id="d">
			<label for="ok">Poprawna odp.</label>
			<input type="text" value="<?php echo $value['ok']; ?>" class="form-control" name="ok" id="ok">
	    	<br>
	    	<button class="btn btn-primary btn-lg">Edytuj!</button>
	  		<?php endforeach; ?>
	  	</form>			

  	<hr>
  	<?php include('body.php'); 

  	?>
</body>
</html>