<!DOCTYPE html>
<html>
    <body>
        <?php
	        $arrayFatorial = array();
     		$numeros = array(5, 7, 9, 11, 12);
            $i = 0;
			
            function CalculaFatorial ($numero)
			{
				$fatorial = 1 ;
          
          		while($numero >= 1){
            		$fatorial = $fatorial * $numero--;
          		}
          	
                return $fatorial;
            }
            
            foreach ($numeros as &$value) {
                array_push($arrayFatorial, CalculaFatorial($value));
			}
            
            echo "Array com os fatoriais:<br>";
            
            while($_i < count($arrayFatorial)){
            	echo "$arrayFatorial[$i]<br>";
            	
                $i++;
            }
        ?>
	</body>
</html>