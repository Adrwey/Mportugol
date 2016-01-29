inteiro N, c=1, b, cont

repita enquanto c <= 1000
	cont = 0
	b = 1
	repita enquanto b <= c
		se c mod b == 0
			cont = cont + 1
		fim
	b = b + 1
	fim
	se cont == 2
			saida(c)
		fim
	
	c = c + 1
fim
