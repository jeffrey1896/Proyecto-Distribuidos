import pandas as pd
import matplotlib.pyplot as plt
plt.rcParams['figure.figsize'] = (15, 5)
df = pd.read_csv('Libro1F.csv')
print(df)
boxplot=df.boxplot(column=['Inicio de Sesion (ms)','Agregar Registro (ms)','Modificar registro (ms)','Eliminar Registro (ms)'],grid=True)
plt.show()