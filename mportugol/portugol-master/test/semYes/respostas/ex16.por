inteiro m = 1000, n, c = 1, x, sm = 1000, aux

entrada(n)

repita enquanto c <= n
	entrada(x)
	
	aux = x
	
	se x < m
		m = x
	fim
	
	se x > m e x < sm
		sm = x
	fim
	
	c = c + 1
fim


saida("Menor: ", m, "Segundo menor: ", sm)
