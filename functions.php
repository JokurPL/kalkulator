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
		if ($snum > 6) {
			$tekst = '<h1 class="text-danger">Za duży stopień pierwiastka (max. 6)!</h1>';
		}
		else if ($snum == 2) {
			$p = '2 stopnia';
			$suma = sqrt($fnum);
			$tekst = '<h3>Wynik <strong>pierwiastkowania ' . $p . '</strong> wyniósł:</h3> <h1>'. '√' . $fnum . ' = ' . $suma . '</h1>';
		}
		else if ($snum == 3) {
			$p = '3 stopnia';
			$suma = pow($fnum,1/3);
			$tekst = '<h3>Wynik <strong>pierwiastkowania ' . $p . '</strong> wyniósł:</h3> <h1>'. '&#8731;' . $fnum . ' = ' . $suma . '</h1>';
		}
		else if ($snum == 4) {
			$p = '4 stopnia';
			$suma = pow($fnum,1/4);
			$tekst = '<h3>Wynik <strong>pierwiastkowania ' . $p . '</strong> wyniósł:</h3> <h1>'. '&#8732;' . $fnum . ' = ' . $suma . '</h1>';
		}
		else if ($snum == 5) {
			$p = '5 stopnia';
			$suma = pow($fnum, 1/5);
			$tekst = '<h3>Wynik <strong>pierwiastkowania ' . $p . '</strong> wyniósł:</h3> <h1>'. '√5 stopnia z ' . $fnum . ' = ' . $suma . '</h1>';
		}
		else if ($snum == 6) {
			$p = '6 stopnia';
			$suma = pow($fnum, 1/6);
			$tekst = '<h3>Wynik <strong>pierwiastkowania ' . $p . '</strong> wyniósł:</h3> <h1>'. '√6 stopnia z ' . $fnum . ' = ' . $suma . '</h1>';
		}
		return $tekst;
	}

	function Los($a, $b) {
		$los = rand($a, $b);

		return '<h3>Twój los to: <strong>' . $los . '</strong>!</h3>';
	}