Instrucciones de Instalacion:

1. Este backend fue desarrollado usando Laragon, por lo que para su correcto funcionamiento debe estar en la carpeta root de esta aplicación. Se asume que todos los comandos se ejecutan desde esta carpeta.
2. Desde una terminal git ejecutar el comando "git clone https://github.com/Granhelios/backend.git"
3. Crear en el controlador de bases de datos una Base de datos llamada "postulacion" sin comillas
4. Realizar en la carpeta backend ejecutar el comando en terminal "composer install" sin las comillas. En caso de no funcionar ejecutar el comando "composer update"
5. Copiar el archivo ".env.example" y cambiar el nombre a ".env"
6. En el archivo ".env" cambiar en la lines "DB_DATABASE=backend" a "DB_DATABASE=postulacion"
7. Ejecutar en terminal "php artisan key:generate"
8. Ejecutar en la terminal "php artisan migrate:fresh"
9. Ejecutar en la terminal "php artisan db:seed"
10. Abrir laragon e iniciar sus servicios.
11. Asegurarse que la API quede montada en la direccion "http://backend.test" sin las comillas
