inteiro A, B, C, M = -1000, m = 1000

entrada(A, B, C)

se A > B e A > C
	M = A
	se B > C
		m = C
	senao
		m = B
	fim

senaose B > A e B > C
	M = B
	se A > C
		m = C
	senao
		m = A
	fim

senao
	M = C
	se A > B
		m = B
	senao
		m = A
	fim
fim


se A nao= M e A nao= m
	saida("O numero do meio eh: ", A)

senaose B nao= M e B nao= m
	saida("O numero do meio eh: ", B)

senao
	saida("O numero do meio eh: ", C)
fim
	
	
	
	
	
	
	
	
	
	
	
