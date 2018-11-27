<?php 
	function ex6()
	{
		# code...
		$toal = 120;
		$red = $toal / 5;
		$blue = ($toal / 100) *30;
		$temp = $toal - ($red + $blue);
		$white = ($temp / 10) *3;
		$yellow = $temp - $white;
		return "Chung ta co $red bi do, $blue bi xanh, $white bi trang va $yellow bi vang";
	}
	echo ex6();
 ?>