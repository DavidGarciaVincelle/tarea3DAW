# DESPLIEGUE DE APLICACIONES WEB – 1º DAW (distancia)
### Actividad evaluable 3 - Docker - 2ª Evaluación

### Autor: David Garcia Vincelle

El objeto del presente repositorio es acreditar la realización de los ejercicios detallados mas adelante, y que corresponden a la TAREA 3, del módulo profesional *Despliegue de Aplicaciones Web*, del ciclo formativo *"Desarrollo de Aplicaciones Web"* en la modalidad a distancia.

### El presente repositorio GitHub contiene las soluciones a los ejercicios

Hay una carpeta para cada ejercicio resuelto, que contiene
- `README.md` con la solución
- `solucionEjercicioX.pdf` de la solución, donde `X` es el numero de ejercicio
- una carpeta `ficherosUtilizados` que contiene los ficheros utilizados para la implementación de la solución (`html`, `php`, `dockerfile`, etc.)

  > Tambien hay una carpeta `images` que es la que contiene las imágenes que el fichero `README.md` necesita como recurso

#### [Ejercicio 1 - trabajo con imágenes](https://github.com/DavidGarciaVincelle/tarea3DAW/tree/main/ejercicio1)
En este ejercicio trabajaremos con imágenes. Por un lado arrancaremos un contenedor que dará servicio web a una plantilla personalizada y comprobaremos que funciona también con `php`. Por otro lado, crearemos un contenedor que dará servicio de base de datos con `mariaDB` y haremos alguna prueba de su funcionamiento.

[solucionEjercicio1.pdf](https://github.com/DavidGarciaVincelle/tarea3DAW/blob/main/ejercicio1/solucionEjercicio1.pdf)

#### [Ejercicio 2 - redes y almacenamiento](https://github.com/DavidGarciaVincelle/tarea3DAW/tree/main/ejercicio2)
En este ejercicio desplegaremos dos contenedores (`Adminer` y `MariaDB`) en una red propia, además crearemos un volumen persistente para el servidor de la base de datos y comprobaremos su funcionamiento.

[solucionEjercicio2.pdf](https://github.com/DavidGarciaVincelle/tarea3DAW/blob/main/ejercicio2/solucionEjercicio2.pdf)

#### [Ejercicio 3 - imagen con Dockerfile](https://github.com/DavidGarciaVincelle/tarea3DAW/tree/main/ejercicio3)
En este ejercicio necesitaremos disponer de una cuenta en Docker Hub.
Crearemos una imagen con un servidor web que sirva un sitio web con la prantilla que teníamos del ejercicio1, y la subiremos a mi cuenta DockerHub

[solucionEjercicio3.pdf](https://github.com/DavidGarciaVincelle/tarea3DAW/blob/main/ejercicio3/solucionEjercicio3.pdf)
