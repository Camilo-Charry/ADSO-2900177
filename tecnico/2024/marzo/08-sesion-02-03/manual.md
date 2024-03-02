## Hola Mundo

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
