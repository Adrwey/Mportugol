<!DOCTYPE html/>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>EXEMPLO</title>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	
	<body>
		<div>
		<h1>O que o código a seguir imprimirá?</h1>
		<p><pre>
		inteiro n = 8, c=1, soma=0
			repita enquanto c <= n
				se c mod 2 == 0 
					soma = soma + c
				fim
			c = c + 1
			fim
			saida(soma)
		</pre></p>
		</div>
		<br/> <br/>
		
		<?php

		/* $lua = new Lua();
		$lua->eval(<<<CODE
		   local var = require "parser"
		   
		   var.interpreta("/var/www/html/Multiprova/Exemplo/exemplo.por")
		   
CODE
); */
			$arquivo = file("/tmp/minhasaida.txt");
			//foreach ($arquivo as $NLine => $line) {
			//echo ($NLine+1)." ".$line;
			
			//$menu=file("menu.txt"); //abro o arquivo
			$arquivo=implode("",$arquivo);
			//echo $arquivo; // imprimo todo o arquivo na tela
			
			    // print_r($arquivo); 
			//}

			
			?>
			<div id="optiones">
		    <input type="radio" name="opcao" value="nao"/><a href="nao.html">34</a><br />
			<input type="radio" name="opcao" value="sim"/><a href="sim.html"><?php echo $arquivo; ?></a><br />
			<input type="radio" name="opcao" value="nao"/><a href="nao.html">22</a><br />
			<input type="radio" name="opcao" value="nao"/> <a href="nao.html">27</a> 
			</div>
		
