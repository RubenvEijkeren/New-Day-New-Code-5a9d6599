<?php
	define("GELDEENHEDEN", [50, 20, 10, 5, 2, 1]);
	$bedrag = intval($argv[1]);
//	echo $bedrag;
	if ($bedrag == 0){
		echo "Geen wisselgeld\n";
		exit;
	}
	foreach (GELDEENHEDEN as $key => $value) {
		if ($bedrag > $value){
			$aantal = intval($bedrag / $value);
			$bedrag = $bedrag % $value;
			echo $aantal . " x " . $value . " euro\n";
		}
		if ($bedrag == 2){
			echo "1 x 2 euro\n";
			exit;
		}
		if ($bedrag == 1){
			echo "1 x 1 euro\n";
			exit;
		}
	}

?>