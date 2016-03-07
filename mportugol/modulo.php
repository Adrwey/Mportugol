<?php
	// Código exemplo abaixo
	$code = " inteiro a, b
			  a = 4
			  b = a
			  saida(a+b)";
	
	// Esta é a função que receberá o código do professor no multiprova e retornará a saída para o arquivo "/tmp/minhasaida.txt"
	//A função está com esta aparência não estética, porque ao tentar colocar de outro modo, o código parou de funcionar
	function modulo($codigo){
		 $arquivo = fopen('teste.por', 'w');
		  fwrite($arquivo, $codigo);
		  fclose($arquivo);
		
		$lua = new Lua();
$saida = $lua->eval(<<<CODE
  
   local var = require "parser"
   local var2 = require "interpretador"
   var.interpreta("/var/www/html/mportugol/teste.por")
   local f = var2.retornaSaida()
   return f
   
CODE
);
		
         return $saida;     
          }


   $valorFinal = modulo($code);
   echo "</br> A saída é: $valorFinal ";
   
?>
