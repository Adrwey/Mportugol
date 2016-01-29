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
$lua->eval(<<<CODE
   local var = require "parser"
   
   var.interpreta("/var/www/html/mportugol/teste/teste.por")
   
CODE
);
   

  
?>

<br/>
<a href="index.php">Voltar</a>
<a href="/mportugol/teste/Exemplo/exemplo.php">Exemplo</a>
	</body>
</html>
