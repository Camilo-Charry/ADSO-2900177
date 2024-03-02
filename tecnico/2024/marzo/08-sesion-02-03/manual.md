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

Use `git status` to list all new or modified files that haven't yet been committed.
Captura de pantalla de GitHub Markdown en la que se muestra la apariencia de los caracteres rodeados por acentos graves. Las palabras "git status" aparecen en un tipo de letra de ancho fijo, resaltado en gris claro.
