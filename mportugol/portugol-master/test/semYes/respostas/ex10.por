inteiro n, c = 1, M = -1000, x

entrada(n)

repita enquanto c <= n
	entrada(x)
	
	se x > M
		M = x
	fim
	c = c + 1
fim

saida("O maior: ", M)
