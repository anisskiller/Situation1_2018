<?php

	$sM = "";



	$T = [];
	$sM = "";

	$Val = 1;
	for ($k=0; $k<=3; $k++) {
		$T[$k] = [];
		for ($m=0; $m<=1; $m++) {
			$T[$k][$m] = 2*$k + ($m+1);
		}
	}
	for ($k=0; $k<=3; $k++) {
		for ($m=0; $m<=1; $m++) {
			$sM = $sM . $T[$k][$m] ." ";
		}
	}





	$A = [];

	$Val = 1;
	for ($k=0; $k<=3; $k++) {
		$A[$k] = [];
		for ($m=0; $m<=1; $m++) {
			$A[$k][$m] = ($k+1) + 4*$m;
		}
	}
	for ($k=0; $k<=3; $k++) {
		for ($m=0; $m<=1; $m++) {
			$sN = $sN . $A[$k][$m] ." ";
		}
	}


	require "exo_8_5.html";

?>
