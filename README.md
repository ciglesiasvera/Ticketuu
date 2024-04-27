# ticketuu
 API para la gestión de tickets de eventos artísticos
 
Documentación de la API Ticketuu
Introducción
La API Ticketuu es una API RESTful que te permite gestionar tus tickets y eventos. Esta API está diseñada para ser fácil de usar e integrarse con tus sistemas existentes.

Endpoints de la API

GET /events -> Obtiene el listado de eventos disponibles, con la información más
relevante del evento

GET /event/id -> Obtiene la información completa del evento por id

POST /purchase -> Crea la compra de un un ticket para un cliente 

GET /orders?client_id=id -> Lista todas las compras de un cliente 

GET /clients -> Lista todos los clientes

GET /tickets -> lista todos los tickets



Instrucciones para Ejecutar la API Ticketuu

1. Requisitos Previos:

Asegúrate de tener instalado PHP en tu sistema. Puedes descargarlo desde php.net.
Instala Composer, que es un administrador de dependencias para PHP, desde getcomposer.org.
Necesitarás un servidor de base de datos MySQL instalado localmente o una conexión a un servidor MySQL remoto.
Clona o descarga el repositorio de la API Ticketuu desde [enlace_del_repositorio].
Asegúrate de tener Laravel instalado globalmente en tu sistema. Si no lo tienes, puedes instalarlo con el siguiente comando:
composer global require laravel/installer

2. Configuración del Proyecto:

Abre una terminal y navega hasta el directorio donde clonaste o descargaste el repositorio de la API Ticketuu.
Ejecuta el siguiente comando para instalar las dependencias del proyecto:
composer install
Copia el archivo .env.example y renómbralo como .env.
En el archivo .env, configura la conexión a tu base de datos MySQL, proporcionando los detalles de tu servidor MySQL en las variables de entorno correspondientes.

3. Migraciones de la Base de Datos:

Ejecuta el siguiente comando para crear las tablas necesarias en la base de datos:
php artisan migrate

4. Ejecución del Servidor:

Una vez completados los pasos anteriores, puedes iniciar el servidor de desarrollo ejecutando el siguiente comando:
php artisan serve

5. Uso de la API:

La API Ticketuu ahora estará disponible en la dirección http://localhost:8000.
Puedes utilizar herramientas como Postman o cURL para enviar solicitudes a los endpoints de la API según la documentación proporcionada.

Si encuentras algún problema o necesitas ayuda adicional, no dudes en contactar al equipo de soporte de Ticketuu enviando un correo electrónico a ciglesiasvera@gmail.com.
Con estas instrucciones, deberías poder ejecutar la API Ticketuu en tu entorno local y comenzar a trabajar con ella. ¡Disfruta de tu experiencia con Ticketuu!



[https://youtu.be/a1QOQr94rhY](https://www.youtube.com/watch?v=a1QOQr94rhY)

[![EVIDENCIA EVALUACIÓN TÉCNICA](https://img.youtube.com/vi/a1QOQr94rhY/0.jpg)](https://www.youtube.com/watch?v=a1QOQr94rhY)


Descargar Versión para Docker: 
