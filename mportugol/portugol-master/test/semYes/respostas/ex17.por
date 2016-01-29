inteiro N, c=1, soma=0, x=0, aux, PP, PN, aux2, DP, DN
bool Perfeito=falso

entrada(N)

aux = N

aux2 = N



repita enquanto Perfeito == falso
	
	N = N + x

	repita enquanto c < N
		se N mod c == 0
			soma = c + soma
		fim
		c = c + 1
	fim
	
	c = 1
	
	se soma == N
		Perfeito = verdadeiro
		PP = N
	fim
	soma = 0
	x = x + 1
fim

Perfeito = falso
x = 1

repita enquanto Perfeito == falso
	
	aux = aux - x

	repita enquanto c < aux
		se aux mod c == 0
			soma = c + soma
		fim
		c = c + 1
	fim
	
	c = 1
	
	se soma == aux
		Perfeito = verdadeiro
		PN = aux
	fim
	soma = 0
	x = x - 1
fim


DP = PP - aux2
DN = (PN - aux2)*(-1)

se DP < DN
	saida("O perfeito mais proximo eh: ", PP)
senao
	saida("O perfeito mais proximo eh: ", PN)
fim


	
	
	
