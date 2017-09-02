  	  <?php include('session.php');

 
  		$sth = $pdo->prepare('INSERT INTO `news`(`nr`, `tresc`) VALUES ( :nr, :tresc)');
  		$sth->bindParam( ':nr', $_POST['nr'] );
    	$sth->bindParam( ':tresc', $_POST['tresc'] );
    	$sth->execute();

    	header('location: admin.php');
  	 ?>