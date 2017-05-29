<?php include('head.php'); ?>
<body>
<div class="container">
<h1>Wynik:</h1>
<hr>
<?php 
	include('functions.php');
	$fnum = $_POST['fnum'];
	$snum = $_POST['snum'];

	$fun = $_POST['fun'];

	if (strlen($fnum) <= 0 || strlen($snum) <=0) {
		echo '<h1>Nie podałeś żadnej wartości!</h1><br>';
	}
	else {

	if ($fun == 'Dodaj') {
		echo Dodaj($fnum, $snum);
	}
	else if ($fun == 'Odejmij') {
		echo Odejmij($fnum, $snum);
	}
	else if ($fun == 'Podziel') {
		echo Podziel($fnum, $snum);
	}
	else if ($fun == 'Pomnóż') {
		echo Pomnoz($fnum, $snum);
	}
	else if ($fun == 'Potęguj') {
		echo Poteguj($fnum, $snum);
	}
}

 ?>
 	<div class="input-group">
 		<a href="index.php" class="btn btn-lg btn-danger">Powrót</a>
 	</div>
 </div>
 </body>
 <?php include('body.php'); ?>