<?php
	function fatorial($x){
		$cont = 1;
		$fato = 1;
		while($cont <= $x){
			$fato = $fato * $cont;
			$cont = $cont + 1;
		}
		echo $fato;
	}
	fatorial(5);
?>