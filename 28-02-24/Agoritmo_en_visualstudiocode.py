#Este código muestra una lista de números desordenados y luego la ordena de manera
#Se crea una lista llamada numeros
numeros = [5, 2, 4, 6, 1, 3]
print("Desordenado")
for numero in numeros:
    print(numero, end='')
    print()
#Se imprime el mensaje "Desordenado" y luego se itera sobre cada elemento de la lista 
#numeros utilizando un bucle for. En cada iteración, se imprime el número seguido de un salto de línea.
    numeros.sort()
#Se ordena la lista numeros utilizando el método sort() que ordena los elementos de la lista en orden ascendente
print("Ordenado")
for numero in numeros:
    print(numero, end='')
    print()
#Se imprime el mensaje "Ordenado" y luego se itera sobre cada elemento de la lista numeros nuevamente utilizando
# un bucle for. En cada iteración, se imprime el número ordenado seguido de un salto de línea.
#En resumen, el código muestra los números en la lista numeros primero desordenados y luego ordenados de manera ascendente.