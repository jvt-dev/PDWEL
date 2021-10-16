<!DOCTYPE html>
<html>
    <body>
        <?php          
            function NumeroPrimo($numero)
			{
            	$ehPrimo = True;
                $i = $numero - 1;
                
                if($numero != 1){  
                  do{
                      if($numero % $i == 0 and $i != 1){
                      
                      $ehPrimo = False;
                      
                      break;                    
                      }
                      $i--;
                  } while($i > 1);
                }
                
                if ($ehPrimo){
                	echo "O número informado é primo<br>";
                }
                else{
                	echo "O número informado não é primo<br>";
                }
            }        
            NumeroPrimo(2);      
            NumeroPrimo(4);
            NumeroPrimo(11);
        ?>
	</body>
</html>