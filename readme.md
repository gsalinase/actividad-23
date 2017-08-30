<section>
<a href="http://desafiolatam.com"><img src="http://blog.desafiolatam.com/wp-content/uploads/2015/03/logo_latam_mini.png" width="100" style="float:right"></a>

# Actividad Presencial 23

Usted tiene una amiga que quiere abrir su propia corredora de propiedades. Ella está desesperada porque le cobran muy caro para desarrollar un sitio web. Le pide ayuda a usted para construir el sitio, pero para reducir los costos le propone trabajar en base a una plantilla gratuita de Wordpress que encontró, su nombre es **Avenue**. Podrás encontrarlas en la carpeta del proyecto.

Para revisar el template debes instalarlo localmente, cargar la plantilla, navegar las diferentes opciones que tiene y agregar algunas propiedades.

>  Siempre que se instala una plantilla nueva, se debe revisar el funcionamiento: Apariencia, Herramientas, Ajustes, Custom Post, Opciones del Tema, editor de página. 

## Ejercicio - Interpretando la plantilla

Revisa archivos y adminitración de plantilla. Realiza una descripción técnica y a nivel de usuario del theme lo más detallado posible.

**Respuesta**

La plantilla Avenue, tiene varias funciones específicas hechas para el rubro inmobiliario, por ejemplo este ACF llamado listing, el cual ayuda al administrador a agregar nuevas casas al CMS. 

Además dentro de la pestaña apariencia tiene una opción específica en la cuál se puede editar más a fondo el temas.

## Ejercicio - Modificando plantilla

Su amiga le pide algunos ajustes. Los cambios avanzados los va a realizar solamente si tiene tiempo para realizarlos. 

Tú como eres un@ desarrollador@ responsable vas a realizar los cambios en un **Child Theme**.

> ¿Esta plantilla se puede trabajar con child theme? ¿Hay algún error? Revise la consola en el inspector de elementos para confirmar. ¿Cómo lo puedo solucionar?

Algunas de las alternativas que tenemos son: 

> *a.* Traer los archivos que faltan según la consola del inspector de elementos a la plantilla hija 
 
> *b.* Modificar el código en la plantilla padre que provoca que al tener la plantilla hija activada, estos archivos no sean encontradas. ¿Ves algún ejemplo de función que no sea la más óptima y por eso me da problemas? 
 
> *c.* No trabajar con Child Theme
 
> La solución b. pareciera lo más "correcto", pero no tiene mucho sentido trabajar con Child theme si es que modificamos el Parent. A modo de ejercicio esta vez utilizaremos la opción a.

### En la página de inicio

- Traducir textos de listado de propiedades en página de inicio.

> Para editar esto hay que modificar todos los archivos que están dentro de la carpeta *lib*.

### En la página individual de propiedades

- Agregar 3 nuevos campos con *Advanced Custom Fields* 

	- Metros cuadrados con campo de texto
	
	- Estacionamiento con checkbox donde la respuesta es Si/No
	
	- Brochure en PDF 

- Desplegar nuevos campos debajo de los que vienen por defecto en la plantilla. El brochure se debe descargar al pinchar una imagen del ícono de PDF.

- Quitar comentarios.

> Avanzado 1: Reemplazar imagen destacada por Flexslider con 3 imágenes usando ACF. Las imágenes se debe mostrar de 660x320px
> Avanzado 2: Al clickear la imagen se debe desplegar a tamaño completo en un lightbox

- Vincular el link de *Contact Me Now* a una página de contacto con un formulario de Contact Form 7 dado el HTML entregado. Ingresar los estilos en un archivo diferente.

> Avanzado 3: Con Query Strings y JS puedes autocompletar el asunto del formulario con el nombre de la propiedad. [Ver ayuda aquí](https://stackoverflow.com/questions/5422265/how-can-i-pre-populate-html-form-input-fields-from-url-parameters)

### Cambios generales
- En el pie de página debe haber un Banner. Para faciliar la administración se debe hacer con Widgets. Pero se requiere que el banner de la página de inicio sea distinta del resto. Su amiga le pide que investigue el tamaño apropiado según los estándares y le deje una imagen de ejemplo por mientras. 