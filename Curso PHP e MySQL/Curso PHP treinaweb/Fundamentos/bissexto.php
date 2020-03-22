<?php
	function bissexto($ano){
		if($ano % 4 == 0){
			if($ano % 100 == 0){
				if($ano % 400 == 0){
					echo "É bissexto";
				}
				else{
					echo "Não é ano bissexto!";
				}
			}
			else{
				echo "É bissexto";
			}
		}
		else{
			echo "Não é ano bissexto!";
		}
	}
	
	bissexto(1990);
	bissexto(2020);
	bissexto(2400);
	bissexto(2011);

?>