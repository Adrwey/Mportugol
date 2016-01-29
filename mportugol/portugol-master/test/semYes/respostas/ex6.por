texto op
inteiro a, b, c

saida("Digite A: ")
entrada(a)

saida("Digite a operacao matematica: ")
entrada(op)

saida("Digite B: ")
entrada(b)

se op == "+"
	c = a + b
senaose op == "-"
	c = a - b
senaose op == "*"
	c = a * b
senaose op == "/"
	c = a/b
senao
	saida("Operacao invalida")
fim

