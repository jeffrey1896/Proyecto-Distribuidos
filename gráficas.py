import pandas as pd
import matplotlib.pyplot as plt

plt.rcParams['figure.figsize'] = (15, 5)
df = pd.read_csv('graf.csv')
print(df)
df.set_index('Tiempo (segundos)', inplace=True)
df.plot(ylabel='Throughput (Request/sec)',grid=True, figsize=(15, 5), c='b')
plt.show()