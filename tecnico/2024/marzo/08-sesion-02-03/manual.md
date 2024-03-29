## Manual

Crea un directorio o subdirectorio. Las extensiones de comandos, que están habilitadas de forma predeterminada, permiten usar un único comando md para crear directorios intermedios en una ruta de acceso especificada.


## A Sintaxis

    md [<drive>:]<path>

## A Parámetros

    Parámetro	Descripción
    <drive>:	Especifica la unidad en la que desea crear el directorio.
    <path>	    Especifica el nombre y la ubicación del directorio nuevo. El sistema de archivos determina la longitud
                máxima de cualquier ruta de acceso única. Es un parámetro obligatorio.
    /?	        Muestra la ayuda en el símbolo del sistema.

## A Ejemplos
# Para crear un directorio denominado Directory1 dentro del directorio actual, escriba:
         
    md Directory1
# Para crear el árbol de directorio Taxes\Property\Current dentro del directorio raíz, con las extensiones de comando habilitadas, escriba:

    md \Taxes\Property\Current
    
## Para crear el árbol de directorios Taxes\Property\Current dentro del directorio raíz como en el ejemplo anterior, pero con las extensiones de comando deshabilitadas, escriba la siguiente secuencia de comandos:
    md \Taxes
    md \Taxes\Property
    md \Taxes\Property\Current
| Estilo                        | Sintaxis       | Métodos abreviados de teclado        | Ejemplo                                    | Resultados                               |
|-------------------------------|----------------|---------------------------------------|--------------------------------------------|------------------------------------------|
| Fuerte                        | ** ** o __ __ | Command+B (Mac) o Ctrl+B (Windows/Linux) | **Este es texto en fuerte**                     | Esto es texto en negrita.                |
| Cursiva                       | * * o _ _     | Command+I (Mac) o CtrI+ (Windows/Linux)  | _Este texto está en cursiva_                 | Este texto está en cursiva               |
| Tachado                       | ~~ ~~          | Ninguno                               | ~~Este texto fue erróneo~~                 | Este texto está equivocado               |
| Cursiva en fuerte y anidada  | ** ** y _ _   | Ninguno                               | **Este texto es _extremadamente_ importante**     | Este texto es extremadamente importante |
| Todo en fuerte y cursiva    | *** ***        | Ninguno                               | ***Todo este texto es importante***          | Todo este texto es importante           |
| Subíndice                    | <sub> </sub>  | Ninguno                               | Este es un texto de <sub>subíndice</sub>        | Se trata de un texto de subíndice       |
| Superíndice                  | <sup> </sup>  | Ninguno                               | Este es un texto de <sup>superíndice</sup>      | Se trata de un texto de superíndice     |



## Entrecomillado de texto
Puede entrecomillar texto utilizando >.

Texto que no es una cita.

> Texto que no es una cita.
Al texto entre comillas se le ha aplicado sangría y tiene un color de tipo diferente.

## Código de cita
Puedes indicar un código o un comando dentro de un enunciado con comillas simples. El texto dentro de las comillas simples no será formateado o cambiado. También puedes presionar el método poniendo en teclado Comando+E (Mac) o Ctrl+E (Windows o Linux) para insertar las comillas simples de bloque de código en una línea.

Use `git status`para enumerar todos los archivos nuevos o modificados que aún no se han confirmado.
Captura de pantalla de GitHub  en la que se muestra la apariencia de los caracteres rodeados por acentos graves. Las palabras "git status" **aparecen en un tipo de letra de ancho fijo, resaltado en gris claro.**

## Para formatear código o texto en su propio bloque distintivo, usa comillas triples.

|Algunos comandos básicos de Git son: |
|-------------------------------|
| git status                    |
| git add                       |
| git commit                    |

## Modelos de color compatibles
En los problemas, las solicitudes de incorporación de cambios en los detalles, puedes llamar a los colores dentro de una frase u oracion mediante comillas simples. Un modelo de color compatible dentro de las comillas simples mostrará una visualización del color.

The background color is `#ffffff` for light mode and `#000000` for dark mode.

## Estos son los modelos de color admitidos actualmente.

| Color | Sintaxis | Ejemplo | Resultados |
|-------|----------|---------|------------|
| HEX   | \`#RRGGBB\` | \`#0969DA\` |aparece el valor HEX #0969DA con un círculo azul. |
| RGB   | \`rgb(R,G,B)\` | \`rgb(9, 105, 218)\` |  aparece el valor RGB 9, 105, 218 con un círculo azul. |
| HSL   | \`hsl(H,S,L)\` | \`hsl(212, 92%, 45%)\` | aparece el valor de HSL


## Vínculos

Puede crear un vínculo en línea escribiendo su texto entre corchetes [ ] y escribiendo la URL entre paréntesis ( ). También puede usar el método abreviado de teclado **Comando+K** para crear un vínculo. Cuando haya seleccionado texto, puede pegar una dirección URL del Portapapeles para crear automáticamente un vínculo a partir de la selección.

También puedes crear un hipervínculo de Markdown resaltando el texto y usando el método abreviado de teclado **Comando+V**. Si quieres reemplazar el texto por el vínculo, usa el método abreviado de teclado Comando+Mayús+V.

This site was built using [GitHub Pages](https://pages.github.com/).

## Enlaces de sección

Puede vincular directamente a una sección en un archivo representado si desliza el puntero sobre el encabezado de la sección para exponer.

![image](https://github.com/Camilo-Charry/ADSO-2900177/assets/161945579/edc8a3b0-c552-46a0-9493-0698074cd981)

## Vínculos relativos

Puedes especificar enlaces relativos y rutas de imagen en los archivos presentados para ayudar a que los lectores se dirijan a otros archivos de tu repositorio.
Un enlace relativo es un enlace que es relativo al archivo actual. Por ejemplo, si tiene un archivo Léame en la raíz del repositorio y tiene otro archivo en docs/CONTRIBUTING.md, el vínculo relativo a CONTRIBUTING.md en el archivo Léame podría tener este aspecto:

| [Contribution guidelines for this project](docs/CONTRIBUTING.md) |
|-----------------------------------------------------------------|



## Aquí tienes el texto con las palabras cambiadas:

"GitHub automáticamente ajustará el enlace relativo o la ruta de la imagen en cualquier rama en la que te encuentres actualmente, asegurando que el enlace o la ruta siempre sean válidos. La ruta del enlace será relativa al archivo actual. Los enlaces que comiencen con / serán relativos a la raíz del repositorio. Puedes utilizar todos los operadores de enlace relativos, como ./ y ../.

Los enlaces relativos son más convenientes para los usuarios que clonan tu repositorio. Los enlaces absolutos pueden no funcionar en los clones de tu repositorio. Se recomienda utilizar enlaces relativos para acceder a los archivos dentro de tu repositorio."

## Imágenes

Puede mostrar una imagen agregando ! y ajustar el texto alternativo en [ ]. El texto alternativo es un texto corto equivalente a la información de la imagen. Luego, escribe el vínculo de la imagen entre paréntesis ().

## EJEMPLO
![image](https://github.com/Camilo-Charry/ADSO-2900177/assets/161945579/2840cd25-7352-40ff-9ca9-6d4feea75762)

GitHub admite la inserción de imágenes en incidencias, solicitudes de incorporación de cambios, debates, comentarios y archivos .md. Puedes mostrar una imagen desde tu repositorio, agregar un enlace a una imagen en línea o cargar una imagen. Para obtener más información, consulte "Carga de recursos".
















