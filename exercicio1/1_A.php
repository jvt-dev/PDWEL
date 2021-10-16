<!DOCTYPE html>
<html>
    <body>
        <?php    
			function CalculaFatorial ($numero)
			{
				$fatorial = 1 ;
          
          		while($numero >= 1){
            		$fatorial = $fatorial * $numero--;
          		}
          	
                echo "O fatorial é $fatorial<br>";
            }
            
            CalculaFatorial(3);	
            CalculaFatorial(9);
            CalculaFatorial(25);
        ?>
	</body>
</html>