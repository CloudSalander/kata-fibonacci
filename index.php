<?php

function get_fibonacci_serie(int $n): array {
	$fibonacci_serie = array();
	$fibonacci_serie[0] = 0;
	if($n > 0) $fibonacci_serie[1] = 1;
	if($n > 1) {
		$con = 2;
		while($con <= $n) {
			$fibonacci_serie[$con] = $fibonacci_serie[$con-2] + $fibonacci_serie[$con-1];
			++$con;
		}
	}
	return $fibonacci_serie; 
}

function printFibonacciSerie(array $serie) {
	$con = 0;
	while($con < count($serie)) {
		echo $serie[$con];
		if($con < (count($serie)-1)) echo ",";
		++$con;
	}
	echo PHP_EOL;
}


while($n = intval(readline("What Fibonacci series do you want to know?"))) {
	$serie = get_fibonacci_serie($n);
	printFibonacciSerie($serie);
}
?>