def ordenar_por_seleccion(array):
    for i in range(len(array) - 1):
        indice_minimo = i
        for j in range(i + 1, len(array)):
            if array[j] < array[indice_minimo]:
                indice_minimo = j

        if indice_minimo != i:
            array[i], array[indice_minimo] = array[indice_minimo], array[i]


if __name__ == "__main__":
    numeros = [5, 2, 4, 6, 1, 3]

    print("Arreglo original:")
    print(' '.join(map(str, numeros)))

    ordenar_por_seleccion(numeros)

    print("Arreglo ordenado:")
    print(' '.join(map(str, numeros)))

