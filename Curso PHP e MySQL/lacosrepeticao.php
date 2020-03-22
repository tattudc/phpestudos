<?php
	//While
    $i = 10;
    echo 'While... ';
    while($i < 15){
        echo $i;
        $i++;
    }
	
	//Do While
    echo '<br>Do While... ';
    $i = 10;
    do{
        echo $i;
        $i++;
    }while($i<15);

	//For
	echo "<br>for... ";
	for($i = 0; $i < 10; $i++){
		echo $i;
	}

	//For Each
	echo '<br>foreach... ';
	$i = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach($i as $j){
		echo $j;
	}
?>