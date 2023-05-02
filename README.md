# W40kBOT
Chatbot sobre Warhammer 40k

Este bot es capaz de interpretar un input sin importar lo siguiente:
    - Mayusculas o minusculas en el prompt
    - Tildes o acentos en el prompt

Las preguntas o prompts que acepta el bot son las siguientes:

    - Hola
    - Quien eres?
    - Que fue la Herejia de Horus?
    - Quien es el emperador de la Humanidad?
    - Que facciones principales podemos encontrar en Warhammer 40000?
    - Que caracteristicas tiene el universo de Warhammer 40000?
    - Que son los Primarcas?
    - Que facciones pertenecen al Caos?
    - Que son los Necrones?
    - Que son los Ctan?
    - Que es la Disformidad?
    - Que es el Mechanicum?
    - Que es el Omnissiah?
    - Donde puedo encontrar informacion introductoria al universo de Warhammer 40000?

La estrategia empleada para que el bot acepte input independientemente de las mayusculas o minusculas asi como de los acentos o tildes es simple, primero
sustituimos todos aquellos caracteres con acento o tilde y los intercambiamos por su equivalente con la funcion strtr() integrada en php. Y por ultimo convertir el string resultante en minusculas para su posterior evaluacion. Es decir, reducimos a cadena a un caso base donde todas las letras son minusculas y sin acento, normalizando el tipo de cadena a evaluar en el process.php .

Algunas de las preguntas incluyen una imagen o un video en la respuesta, estas son las siguientes:

    - Quien eres?
    - Que son los Primarcas?
    - Que facciones pertenecen al Caos?
    - Que son los Ctan?

Las respuestas son fijas asi como las preguntas, por lo que tenemos un archivo que almacena las respuestas para despues procesarlas en el archivo process.php

Tambien se ha creado un script en JS para crear una rotacion de fondos y dar vida al bot

Los objetivos que se han cumplido acorde a los definidos en Moodle son:

    - Reconocer preguntas en minúsculas / minúsculas
    - Reconocer preguntas con tildes
    - Respuestas con imágenes y vídeos
    - Animaciones
    