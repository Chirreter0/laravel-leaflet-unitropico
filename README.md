# Navegacion Unitropico

Proyecto de mapa universitario con el uso de [Leaflet JS](https://leafletjs.com) y [OpenStreetMap](https://www.openstreetmap.org) construido en Laravel 8.

![Ejemplo](public/screenshots/Screenshot%20from%202023-12-03%2016-04-39.png)

## Caracteristicas

En este proyecto buscamos guiar a la comunidad universitaria de nuevo ingreso con un mapa donde se pueda ver los lugares mas importantes del campus.

Fue implementado un manejo de marcadores (CRUD) con informacion como la localizacion/coordenadas y descripcion de ellos.

Tambien cuenta con una entrada directa de marcadores desde el mapa. 


## Pasos de instalacion
Se requiere tener instalado:
* PHP
* Composer
* Mysql Community

Seguir los siguientes pasos para instalacion:

1. Clonar el repositorio.
    ```bash
    $ git clone https://github.com/Chirreter0/laravel-leaflet-unitropico.git
    ```
2. `$ cd laravel-leaflet`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Llenar los datos de configuracion de su **Base de datos** en `.env`
7. `$ php artisan migrate`
8. `$ php artisan serve`
10. Abrir `https://localhost:8000` con su explorador web.

### Datos Iniciales

Si necesita llenar la base de datos con los marcadores iniciales:
```bash
$ php artisan db:seed
```
### Direcciones

Vista Administrador
* http://127.0.0.1:8000/admin

Vista Usuario
* http://127.0.0.1:8000/

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
