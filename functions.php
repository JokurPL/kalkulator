<?php  
	function Dodaj($fnum, $snum) {
		$suma = $fnum + $snum;
		return '<h3>Wynik <strong>dodawania</strong> wyniósł:</h3> <h1>'. $fnum . ' + ' . $snum . ' = ' .$suma . '</h1>';
	}

	function Odejmij($fnum, $snum) {
		$suma = $fnum - $snum;
		return '<h3>Wynik <strong>odejmowania</strong> wyniósł:</h3> <h1>' . $fnum . ' - '. $snum . ' = ' . $suma . '</h1>';
	}

	function Podziel($fnum, $snum) {
		if ($snum == 0) {
			echo '<h2 style="color:red">Nie dzieli się przez 0!</h2>';
		}
		else {
		$suma = $fnum / $snum;
		return '<h3>Wynik <strong>dzielenia</strong> wyniósł:</h3> <h1>'. $fnum . ' : ' . $snum . ' = ' . $suma . '</h1>';
	}
	}

	function Pomnoz($fnum, $snum) {
		$suma = $fnum * $snum;
		return '<h3>Wynik <strong>mnożenia</strong> wyniósł:</h3> <h1>' . $fnum . ' × ' . $snum . ' = ' . $suma . '</h1>';
	}

	function Poteguj($fnum, $snum) {
		if ($fnum <= 0 || $snum <= 0) {
			echo '<h1 style="color: #fd3636">Wartości nie mogą być ujemne ani równe 0!</h1>';
		}
		else {
		$suma = pow($fnum, $snum);
		return '<h3>Wynik <strong>potęgowania</strong> wyniósł:</h3> <h1>'. $fnum . '^' . $snum . ' = ' . $suma . '</h1>';
	}
	}

	function Pierwiastek($fnum, $snum) {
		$pierwiastek1 = sqrt($fnum);
		$pierwiastek2 = sqrt($snum);

		return '<h3>Wynik <strong>pierwiastkowania</strong> wyniósł:</h3> <h1>'. '√' . $fnum . ' = ' . $pierwiastek1 . '<br>' . '√' . $snum . ' = ' .  $pierwiastek2 . '</h1>';
	}

	function Los($a, $b) {
		$los = rand($a, $b);

		return '<h3>Twój los to: <strong>' . $los . '</strong>!</h3>';
	}