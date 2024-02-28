numeros = [5, 2, 4, 6, 1, 3]
print("Desordenado")
for numero in numeros:
    print(numero, end='')
    print()
    numeros.sort()
print("Ordenado")
for numero in numeros:
    print(numero, end='')
    print()
