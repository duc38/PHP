<?php 
	function ex4()
	{
		# code...
		$money = 2000;
		$gia = 200;
		$sokeo = 0;
		$sovo = 0;
		while ($money > 0) {
			# code...
			$money = $money - 200;
			$sokeo++;
			$sovo++;
			while ($sovo == 2) {
				# code...
				$sovo = $sovo - 2;
				$sokeo++;
				$sovo++;
			}
		}
		return $sokeo;
	}
	echo "So keo co the doi la:".ex4();
 ?> 

