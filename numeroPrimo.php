<?php

 
     $i=0;
	 $j=0;
	 $esPrimo=0; 
	
	//for para recorrer los numeros primos del 1 al 100
	for($i = 2; $i <= 100; $i++) 
     { 
         $esPrimo = 1; 
		 //segundo for
          for($j = 2; $j < $i; $j ++) {
               if(!($i % $j)) 
               { 
                    $esPrimo = 0;  
               } 
          }
		  //si es el numero es primo se imprime en pantalla
		  if($esPrimo) {
               echo $i."<br>"; 
	      }
     } 

?>

