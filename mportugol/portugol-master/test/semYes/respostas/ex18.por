inteiro N, c=1, soma=0, dig

entrada(N)

repita enquanto c < N
	dig = N mod 10
	N = N/10
	
	soma = dig + soma
fim

saida("Soma dos algarismos: ", soma)
	
	
