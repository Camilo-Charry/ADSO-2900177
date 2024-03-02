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
## Estilos de texto

Puedes indicar énfasis con texto en negrita, cursiva, tachado, o de subíndice o superíndice en los campos de comentarios y archivos .md.

| Estilo                        | Sintaxis       | Métodos abreviados de teclado        | Ejemplo                                    | Resultados                               |
|-------------------------------|----------------|---------------------------------------|--------------------------------------------|------------------------------------------|
| Bold                          | ** ** o __ __ | Command+B (Mac) o Ctrl+B (Windows/Linux) | **This is bold text**                     | Esto es texto en negrita.                |
| Cursiva                       | * * o _ _     | Command+I (Mac) o CtrI+ (Windows/Linux)  | _This text is italicized_                 | Este texto está en cursiva               |
| Tachado                       | ~~ ~~          | Ninguno                               | ~~This was mistaken text~~                 | Este texto está equivocado               |
| Cursiva en negrita y anidada | ** ** y _ _   | Ninguno                               | **This text is _extremely_ important**     | Este texto es extremadamente importante |
| Todo en negrita y cursiva    | *** ***        | Ninguno                               | ***All this text is important***          | Todo este texto es importante           |
| Subscript                    | <sub> </sub>  | Ninguno                               | This is a <sub>subscript</sub> text        | Se trata de un texto de subíndice       |
| Superscript                  | <sup> </sup>  | Ninguno                               | This is a <sup>superscript</sup> text      | Se trata de un texto de superíndice     |



    ## Entrecomillado de texto
Puede entrecomillar texto con >.

Text that is not a quote

> Text that is a quote
Al texto entre comillas se le ha aplicado sangría y tiene un color de tipo diferente.
