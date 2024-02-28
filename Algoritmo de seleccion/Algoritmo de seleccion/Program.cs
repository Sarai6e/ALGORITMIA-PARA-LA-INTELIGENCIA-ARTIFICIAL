using System;

class Program
{
    static void Main(string[] args)
    {
        // Arreglo de ejemplo
        int[] array = { 64, 25, 12, 22, 11 };

        Console.WriteLine("Arreglo original:");
        PrintArray(array);

        SelectionSort(array);

        Console.WriteLine("\nArreglo ordenado:");
        PrintArray(array);
    }

    // Método para imprimir un arreglo
    static void PrintArray(int[] arr)
    {
        foreach (var item in arr)
        {
            Console.Write(item + " ");
        }
        Console.WriteLine();
    }

    // Algoritmo de selección
    static void SelectionSort(int[] arr)
    {
        int n = arr.Length;

        // Itera sobre todo el arreglo
        for (int i = 0; i < n - 1; i++)
        {
            // Encuentra el mínimo elemento en el arreglo no ordenado
            int minIndex = i;
            for (int j = i + 1; j < n; j++)
            {
                if (arr[j] < arr[minIndex])
                {
                    minIndex = j;
                }
            }

            // Intercambia el elemento mínimo con el primer elemento no ordenado
            int temp = arr[minIndex];
            arr[minIndex] = arr[i];
            arr[i] = temp;
        }
    }
}

