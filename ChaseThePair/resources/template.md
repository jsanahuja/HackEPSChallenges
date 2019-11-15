# Chase The Pair Challenge by HackEPS2019

## Descripción
Teniendo en cuenta que cualquier algoritmo de ordenación tiene como mínimo un coste logarítmico no tiene demasiado sentido hacer una preordenación en un problema de búsqueda.
Lo que hago, sabiendo que los dos sets tienen el mismo tamaño, es realizar la búsqueda en los dos sets a la vez.

## Información
- Group name: undefined
- Cost: O(n)

|Sets Size|Time expend (s)| Time expend/Sets size (μs/unit)
|:-:|--:|--:|
|1,000|0.000324|0.324000
|10,000|0.002737|0.273700
|100,000|0.027873|0.278730
|1,000,000|0.281748|0.281748


Como se puede ver en la terca columna, el coste por unidad es lineal O(N). Tarda una media de `0.2895445 μs` * Sets Size

## Ejecución
Hecho en PHP. Probado con PHP 7.3 cli.

Puede ejecutarse de la siguiente forma:

> php src/script.php <archivo de entrada\> <A number|'random'\>

El archivo de entrada debe seguir el formato generado por `setsGenerator`. Con 'random' el propio script generará A tal que `min(max(set1), max(set2))` \>= `A` \>= `max(min(set1), min(set2))`

## Pruebas
Se incluye un script bash que ejecutará el algoritmo con todos los archivos localizados en la carpeta ./tests

> sh test.sh

```
$ sh test.sh
==========================================================
Sets size: 1000 - Chased number: 1238
Result: [1237, 1236]
Time: 0.00032401084899902 seconds
==========================================================
Sets size: 10000 - Chased number: 28385
Result: [28383, 28386]
Time: 0.0027379989624023 seconds
==========================================================
Sets size: 100000 - Chased number: 170152
Result: [170147, 170152]
Time: 0.027873039245605 seconds
==========================================================
Sets size: 1000000 - Chased number: 677856
Result: [677858, 677860]
Time: 0.28174805641174 seconds

```
