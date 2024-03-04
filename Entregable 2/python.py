import math

# Definir la función de cálculo de la entropía
def calcular_entropia(probabilidades):
    entropia = 0
    for probabilidad in probabilidades:
        if probabilidad != 0:
            entropia += probabilidad * math.log2(probabilidad)
    return -entropia

# Definir la función de cálculo de la ganancia de información
def calcular_ganancia_informacion(entropia_padre, probabilidades_hijos, entropias_hijos):
    ganancia = entropia_padre
    for probabilidad, entropia_hijo in zip(probabilidades_hijos, entropias_hijos):
        ganancia -= probabilidad * entropia_hijo
    return ganancia

# Definir el árbol de decisión para el proceso de compra
def proceso_compra():
    print("1. Iniciar sesión o registrarse.")
    print("2. Buscar producto.")
    print("3. Seleccionar producto.")
    print("4. Comprar producto.")
    print("5. Ingresar datos de pago.")

    decisiones_usuario = []

    # Simular el proceso de compra
    for paso in range(5):
        decision = input("¿Ha completado el paso {}? (s/n): ".format(paso + 1))
        if decision.lower() == 's':
            decisiones_usuario.append(True)
        else:
            decisiones_usuario.append(False)

    # Calcular entropía y ganancia de información
    entropia_inicial = calcular_entropia([0.2, 0.8])  # Ejemplo de distribución inicial de usuarios
    entropias_pasos = [0.5, 0.4, 0.3, 0.2, 0.1]  # Ejemplo de entropía para cada paso
    ganancias_informacion = [calcular_ganancia_informacion(entropia_inicial, [0.5, 0.5], [entropias_pasos[i], entropias_pasos[i]])
                             for i in range(5)]

    # Imprimir resultados
    for paso, ganancia in enumerate(ganancias_informacion):
        print("Ganancia de información en paso {}: {}".format(paso + 1, ganancia))

    # Aplicar algoritmo IDE3 para el "Tornillo Feliz"
    print("Aplicando algoritmo IDE3 para el Tornillo Feliz...")

if _name_ == "_main_":
    proceso_compra()