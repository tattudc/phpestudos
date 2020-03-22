<?php
	error_reporting(E_ALL);
	
	$divisor = 1;
	try{
		if($divisor === 0){
			throw new Exception("Não é possivel dividir por zero");
		}
		$valor = 100/$divisor;
		
		echo $valor;
	}catch(\Throwable $th){
		echo $th->getMessage();
	}
