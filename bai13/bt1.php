<?php 
	function supercal($a,$b,$cal)
	{

		# code...
		if($cal == '+'){
			return $a + $b;
		}
		elseif ($cal == '-') {
			# code...
			return $a - $b;
		}
		elseif ($cal == '*') {
			# code...
			return $a * $b;
		}
		elseif ($cal == '/') {
			# code...
			return $a / $b;
		}
	}
	echo "so a = 10 va so b = 5";
	echo "<br>";
	echo "tong cua a va b la: ".supercal(10,5,"+");
	echo "<br>";
	echo "hieu cua a va b la: ".supercal(10,5,"-");
	echo "<br>";

	echo "tich cua a va b la: ".supercal(10,5,"*");
	echo "<br>";
	echo "thuong cua a va b la: ".supercal(10,5,"/");
 ?>