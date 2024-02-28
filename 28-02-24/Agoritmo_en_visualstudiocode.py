def ordenar_por_seleccion(array):
    for i in range(len(array)):
        min_index = i
        for j in range(i+1, len(array)):
            if array[j] < array[min_index]:
                min_index = j
        array[i], array[min_index] = array[min_index], array[i]

if __name__ == "__main__":
    numeros = [5, 2, 4, 6, 1, 3]

    print("Arreglo original:")
    print(' '.join(map(str, numeros)))

    ordenar_por_seleccion(numeros)

    print("Arreglo ordenado:")
    print(' '.join(map(str, numeros)))

