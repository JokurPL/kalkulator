<?php  include('session.php');  ?>
<?php 
	$news = $pdo->query('SELECT * FROM `news`'); 
	$quiz = $pdo->query('SELECT * FROM `pytania`');
	$com = $pdo->query('SELECT * FROM `com`');
?>
<body>
	<div class="container">
		<h1>Panel Administratora <a href="index.php" class="btn btn-sm btn-warning">Stronga główna</a><hr></h1>
		<div class="row">
		<div class="container">
			<h2 class="text-primary">Aktualności <a href="add.php" class="btn btn-sm btn-primary">Dodaj</a> <hr></h2>
			<table class="table table-bordered">
				<thead>
					<th>ID</th>
					<th>Nr.</th>
					<th>Treść</th>
					<th>Usuń</th>
					<th>Edytuj </th>
				</thead>
				<?php 

				foreach ($news->fetchAll() as $value) {
					echo '
					<tbody>
						<td>' .$value['id'] . '</td>
						<td>' . $value['nr'] . '</td>
						<td>' . $value['tresc'] .'</td>
						<td><form action="usun.php" method="get"><input name="id" type="hidden" value="' . $value['id'] . '"><button class="btn btn-danger">Usuń</button></form></td>
						<td><form action="edit.php" method="get"><input name="id" type="hidden" value="' . $value['id'] . '"><button class="btn btn-success">Edytuj</button></form></td>
					</tbody>';
				}

				 ?>
			</table>
		</div>
		<div class="container">
			<h2 class="text-primary">Quiz o wzorach <a href="addq.php" class="btn btn-sm btn-primary">Dodaj</a> <hr></h2>
			<table class="table table-bordered table-responsive">
				<thead>
					<th>ID</th>
					<th>Treść</th>
					<th>A</th>
					<th>B</th>
					<th>C</th>
					<th>D</th>
					<th>Poprawna odp.</th>
					<th>Usuń</th>
					<th>Edytuj</th>
				</thead>
				<?php 

				foreach ($quiz->fetchAll() as $value) {
					echo '
					<tbody>
						<td>' .$value['id'] . '</td>
						<td> Wzór na: ' .$value['tresc'] . '</td>
						<td><img  class="media-object" width="100" src="' . $value['a'] . '"></td>
						<td><img  class="media-object" width="100" src="' . $value['b'] . '"></td>
						<td><img  class="media-object" width="100" src="' . $value['c'] . '"></td>
						<td><img  class="media-object" width="100" 	src="' . $value['d'] . '"></td>
						<td>'. $value['ok'] .'</td>
						<td><form action="usunq.php" method="get"><input name="id" type="hidden" value="' . $value['id'] . '"><button class="btn btn-danger">Usuń</button></form></td>
						<td><form action="editq.php" method="get"><input name="id" type="hidden" value="' . $value['id'] . '"><button class="btn btn-success">Edytuj</button></form></td>
					</tbody>';
				}

				 ?>
			</table>
		</div>
		</div>
		<div class="container">
			<h2 class="text-primary">Komentarze <hr></h2>
			<table class="table table-bordered table-responsive">
				<thead>
					<th>ID</th>
					<th>Autor</th>
					<th>Treść</th>
				</thead>
				<?php 

				foreach ($com->fetchAll() as $value) {
					echo '
					<tbody>
						<td>' .$value['id'] . '</td>
						<td>' .$value['autor'] . '</td>
						<td>' . $value['tresc'] . '</td>
						<td><form action="usunc.php" method="get"><input name="id" type="hidden" value="' . $value['id'] . '"><button class="btn btn-danger">Usuń</button></form></td>
					</tbody>';
				}

				 ?>
			</table>
		</div>
		</div>
<hr>

<?php include('body.php');  ?>