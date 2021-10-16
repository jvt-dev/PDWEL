<!DOCTYPE html>
<html>
    <body>
        <?php
			$numeros = array(1, 2, 3, 4, 5, 6, 28, 496);    
            $arrayNumerosPerfeitos = array();
			$i = 0;
			
			function Perfeito($numero)
			{
				$i = $numero - 1;
				$perfeito = False;
          		$soma = 0;

          		while($i >= 1){
                	if ($numero % $i == 0){
                	
                    	$soma = $soma + $i;
                    }
                    $i--;                 
                }
                
                if ($soma == $numero){
                	$perfeito = True;
                }
          	
            	return $perfeito;
            }
			            
            foreach ($numeros as &$value) {
			    if (Perfeito($value)){
                	array_push($arrayNumerosPerfeitos, $value);
                }
			}
            
            echo "Array de números perfeitos:<br>";
            while($i <= count($arrayNumerosPerfeitos)){
            	echo "$arrayNumerosPerfeitos[$i]<br>";
                $i++;
            }       
        ?>
	</body>
</html>