  	  <?php include('session.php');

 		
  		$sth = $pdo->prepare('INSERT INTO `pytania`(`tresc`, `a`, `b`, `c`, `d`, `ok`) VALUES ( :tresc, :a, :b, :c, :d, :ok)');
  		$sth->bindParam( ':tresc', $_POST['tresc'] );
    	$sth->bindParam( ':a', $_POST['a'] );
    	$sth->bindParam( ':b', $_POST['b'] );
    	$sth->bindParam( ':c', $_POST['c'] );
    	$sth->bindParam( ':d', $_POST['d'] );
    	$sth->bindParam( ':ok', $_POST['ok'] );
    	$sth->execute();

    	header('location: admin.php');
  	 ?>