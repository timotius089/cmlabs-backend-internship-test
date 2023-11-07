<?php 
for ($i=1; $i <= 100; $i++) { 
	if ($i % 3 == 0) {
		if ($i % 5 == 0) {
			echo "(",$i,")FizzBuzz ";
		}
		else{
			echo " (",$i,")Fizz ";	
		}
	}
	elseif ($i % 5 == 0) {
		echo " (",$i,")Buzz ";	
	}
	else{
		echo $i;
		echo "&nbsp";
	}
}
?>