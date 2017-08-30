## **ACTIVIDAD 23**
----------
https://github.com/DesafioLatam/Blearning-Frontend-E23CP1A1

Usted tiene un amiga que quiere abrir su propia corredora de propiedades. Ella está desesperada porque le cobran muy caro para desarrollar un sitio web. Le pide ayuda a usted para construir el sitio, pero para reducir los costos le propone trabajar en base a una plantilla gratuita de Wordpress que encontró, su nombre es Avenue. Podrás encontrarlas en la carpeta del proyecto.
Para revisar el template debes instalarlo localmente, cargar la plantilla, navegar las diferentes opciones que tiene y agregar algunas propiedades.
Siempre que se instala una plantilla nueva, se debe revisar el funcionamiento: Apariencia, Herramientas, Ajustes, Custom Post, Opciones del Tema, editor de página.

### Ejercicio - Interpretando la plantilla

----------

#### Responda en un archivo .md

Revisa archivos y adminitración de plantilla. Realiza una descripción técnica y a nivel de usuario del theme lo más detallado posible.

R// La plantilla Avenue, tiene varias funciones especifícas basados 


### Ejercicio - Modificando plantilla

------

Su amiga le pide algunos ajustes. Los cambios avanzados los va a realizar solamente si tiene tiempo para realizarlos.

Tú como eres un@ desarrollador@ responsable vas a realizar los cambios en un Child Theme.


¿Esta plantilla se puede trabajar con child theme? 

*R//* Sí.

¿Hay algún error? Revise la consola en el inspector de elementos para confirmar.

*R//* Hay solo un error. Al copiar el index.php, aparece una imagen fuera de ruta, debido mantiene la ruta del tema padre.

¿Cómo lo puedo solucionar?

*R//* La solucion es agregar el archivo que falta en la carpeta de imágenes del tema padre.

Algunas de las alternativas que tenemos son:

*a. Traer los archivos que faltan según la consola del inspector de elementos a la plantilla hija*

b. Modificar el código en la plantilla padre que provoca que al tener la plantilla hija activada, estos archivos no sean encontradas. ¿Ves algún ejemplo de función que no sea la más óptima y por eso me da problemas?
c. No trabajar con Child Theme
La solución b. pareciera lo más "correcto", pero no tiene mucho sentido trabajar con Child theme si es que modificamos el Parent. A modo de ejercicio esta vez utilizaremos la opción a.
 

