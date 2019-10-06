# Chase The Pair

## Importante

Una vez completado el reto debe actualizar el campo de su perfil de usuario de la HackEPS con el link a su repositorio. No se tendrán en cuenta todos aquellos repositorios que no sean presentados como link en el perfil de usuario de la hackEPS2019.

## Descripción

Dado un número (número A) obtén el par de números más cercano (número B y número C) provenientes de dos sets formados por números aleatorios. Cuando existen dos números provinientes de un mismo set que se encuentran a la misma distancia del resultado puede devolver cualquiera de los dos. 

Existen diferentes niveles de dificultad que repercutirán en la selección del ganador.  
- Dificultad A: Considere las dos matrices con la misma longitud y ordenadas.  
- Dificultad B: Considere las dos matrices con la misma longitud pero no ordenadas.

### Notas
La elección de la _DificultadB_ implica aceptar que los dos sets no están ordenados y ese es su estado natural. Por lo tanto no se puede aplicar como técnica:
1. Recoger los sets generados con valores numéricos desordenados
2. Realizar un algoritmo de _sort_ para cada uno de ellos
3. Solucionar el problema como si se tratase de la _DificultadA_

Si este caso se detecta, el algoritmo será corregido como si se presentase para ser evaluado en la _DificultadA_.

## Ejemplo (Dificultad A)
Dados dos sets de valores numericos (SetA y SetB)

    SeA: [1,23,45,66,84,113,145,178,205,210,221,250,264,300]
    SetB: [5,31,40,52,73,103,126,162,195,214,225,241,256,267]

Dado un valor numérico aleatorio (toChase) contenido dentro de los dos sets (No tiene porqué existir dentro de estos)

    toChase: 231
    WHERE toChase &gt;= min(SetA, SetB) && toChase <= max(SetA, SetB)

Encontrar aquella pareja de valores numéricos más cercanos a _toChase_

    Result: [221, 225]

### Notas
- Los sets A y B pueden considerarse de la misma longitud.
- Si dos valores dentro de un mismo set se encuentran a la misma distancia de _toChase_, cualquiera de los dos es perfectamente valido como resultado.
- En caso de encontrar el valor _toChase_ dentro del set, este es un resultado perfectamente valido.
- Teniendo en cuenta los anteriores puntos notificados, todas las técnicas de programación (legales) están permitidas si con ellas conseguís un mejor tiempo

## Recursos
El reto aporta un generador de sets además de una aplicación funcional que ejecuta la versión más costosa del algoritmo (a modo de guía para saber el estado de vuestro algoritmo). 

Cualquier duda, ejecute el generador o la aplicación con el flag "--info".

Se recomienda ejecutar los progrmas en entornos linux. En caso de suponer un problema, recomendamos el uso de [Git for Windows](https://gitforwindows.org/). No solo será util para este reto sinó también de cara a la Hackathon.

    # Example application running difficulty B
    ./example

    # Sets Generator
    ./setsGenerator

## Plantilla README
Este reto incluye una plantilla para poder usarla como README en vuestro proyecto. Esta incluye información básica para poderos identificar como participantes de la HackEPS.

    ChaseThePair/resources/template.md