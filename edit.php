<?php  include( 'session.php' ); 

	$id = $_GET['id'];

	if( $id > 0 ) {
	$sth = $pdo->prepare( 'SELECT * FROM `news` WHERE `id` = :id' );
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
		<form method="post" action="update.php">
			<?php foreach ($sth->fetchAll() as $value):?>	
			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			<label for="nr">Podaj nr. aktualizacji</label>
			<input type="number" value="<?php echo $value['nr']; ?>" class="form-control" name="nr" id="nr">
			<label for="news"><h2>Treść newsa</h2></label>
	    	<textarea name="tresc" id="news"><?php echo $value['tresc']; ?></textarea>
	    	<br>
	    	<button class="btn btn-primary btn-lg">Edytuj!</button>
	  		<?php endforeach; ?>
	  	</form>			

  	<hr>
  	<?php include('body.php'); 

  	?>
</body>
</html>