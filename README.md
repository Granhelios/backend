Instrucciones de Instalacion:

1. Desde una terminal git ejecutar el comando "git clone https://github.com/Granhelios/backend.git"
2. Crear en el controlador de bases de datos una Base de datos llamada "postulacion" sin comillas
3. Realizar en la carpeta backend ejecutar el comando en terminal "composer install" sin las comillas
4. Copiar el archivo ".env.example" y cambiar el nombre a ".env"
5. En el archivo ".env" cambiar en la lines "DB_DATABASE=backend" a "DB_DATABASE=postulacion"
6. Ejecutar en terminal "php artisan key:generate"
7. Ejecutar en la terminal "php artisan migrate:fresh"
8. Ejecutar en la terminal "php artisan db:seed"
9. Escribir en la terminal de texto "php artisan serve" sin las comillas