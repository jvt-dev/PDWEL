<!DOCTYPE html>
<html>
    <body>
        <?php
			$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);    
			$arrayNumerosPrimos = array();  
			$i = 0;
            function NumeroPrimo($numero)
			{
            	$ehPrimo = True;
                $i = $numero - 1;
                
                if($numero != 1){
                  do{
                      if($i != 1 and $numero % $i == 0){
                      
                      $ehPrimo = False;
                      
                      break;
                      
                      }
                      $i--;
                      
                  } while($i > 1);
                }
                
                return $ehPrimo;
            }
            
            
            foreach ($numeros as &$value) {
			    if ($value != 1 and NumeroPrimo($value)){
                	array_push($arrayNumerosPrimos, $value);
                }
			}
			echo "Array de números primos:<br><br>";
            while($i <= count($arrayNumerosPrimos)){
            	echo "$arrayNumerosPrimos[$i]<br>";
                $i++;
            }	
        ?>    
	</body>
</html>