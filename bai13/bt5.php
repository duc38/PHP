<?php 
	function ex5()
	{
		# code...
		$blue = 50;
		$red = 0;
		for ($i=0; $i <= 50 ; $i++) { 
			# code...
			if(2/5*$blue + 3/4*$red == 27){
				continue;
			}
			$blue--;
			$red++;
		}
		return "Vay so bi xanh la $blue va so bi do la $red";
	}
	echo ex5();
 ?>