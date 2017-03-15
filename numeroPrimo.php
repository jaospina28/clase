<?php

 
     $i=0;
	 $j=0;
	 $esPrimo=0; 
	
	for($i = 2; $i <= 100; $i++) 
     { 
         $esPrimo = 1; 
          for($j = 2; $j < $i; $j ++) {
               if(!($i % $j)) 
               { 
                    $esPrimo = 0;  
               } 
          }
		  if($esPrimo) {
               echo $i."<br>"; 
	      }
     } 

?>

