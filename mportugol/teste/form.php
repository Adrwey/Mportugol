<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Portugol</title>
        <link rel="stylesheet" href="_css/estiloPrincipal.css"/>
        
        
    </head>
    <body>
		
		<?php
  //Código recebido
  $code = $_POST['ncode'];
  
  
  $arquivo = fopen('teste.por', 'w');
  fwrite($arquivo, $code);
  fclose($arquivo);
  
$lua = new Lua();
$imp = $lua->eval(<<<CODE
   local var = require "parser"
   local var2 = require "interpretador"
   var.interpreta("/var/www/html/mportugol/teste/teste.por")
   local f= var2.retornaSaida()
   return f
CODE
);
	
	$L = count($imp);
	$xxx = 0;
	if($L == 1){
		echo "<br> A saída é $imp[1]. <br>";
	}
	else{
		for($i = 1;$i <= $L; $i++){
			if($i == 1){
				echo "<br> As saídas são $imp[1], ";			
			}
			else{
				if($xxx != 1995){
					echo " $imp[$i], "; 
				}
				else{
					echo " $imp[$i].";				
				}				
				if($i == $L-1){
					echo " e ";
					$xxx = 1995;			
				}
			}			
		}
	}   
	
  
?>

<br/>
<a href="index.php">Voltar</a>
<a href="/mportugol/teste/Exemplo/exemplo.php">Exemplo</a>
	</body>
</html>
