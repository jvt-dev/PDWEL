<!DOCTYPE html>
<html>
    <body>
        <?php
			function Perfeito ($numero)
			{
				$i = $numero - 1;
				
          		$soma = 0;
          		
          		while($i >= 1){
          		
                	if ($numero % $i == 0){              	
                    	$soma = $soma + $i;   		
                    }
                    $i--;
                }
                
                if ($soma == $numero){
                	echo "O valor informado é perfeito<br>";
                }
                
                else{
                	echo "O valor informado não é perfeito<br>";
                }  	
            }	
            Perfeito(2);
        	Perfeito(6);
        	Perfeito(12);
        ?>
	</body>
</html>