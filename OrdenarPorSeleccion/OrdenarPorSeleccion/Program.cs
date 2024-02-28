using System;

class Program
{
    public static void OrdenarPorSeleccion(int[] array)
    {
        for (int i = 0; i < array.Length - 1; i++)
        {
            int indiceMinimo = i;
            for (int j = i + 1; j < array.Length; j++)
            {
                if (array[j] < array[indiceMinimo])
                {
                    indiceMinimo = j;
                }
            }

            if (indiceMinimo != i)
            {
                int temp = array[i];
                array[i] = array[indiceMinimo];
                array[indiceMinimo] = temp;
            }
        }
    }

    static void Main(string[] args)
    {
        int[] numeros = { 5, 2, 4, 6, 1, 3 };

        Console.WriteLine("Arreglo original:");
        foreach (int numero in numeros)
        {
            Console.Write(numero + " ");
        }

        Console.WriteLine();

        OrdenarPorSeleccion(numeros);

        Console.WriteLine("Arreglo ordenado:");
        foreach (int numero in numeros)
        {
            Console.Write(numero + " ");
        }

        Console.WriteLine();
    }
}
