<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Examen 1 - Taller de Aplicaciones en Internet

**Desarrollado por:**

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://lh3.googleusercontent.com/a/ACg8ocLe2Qu8N-GPy9f6XNEsVTwJdPtqult77Mp7vuu-asM_fU3jad0=s360-c-no" 
         width="100" 
         alt="Laravel Logo" 
         style="border-radius: 15px;">
  </a>
</p>

_Andrea Megan Lafuente Rocha_  
_Carrera de Sistemas Informáticos (Modalidad Complementaria)_  
_Universidad Adventista de Bolivia (UAB)_

---

## Descripción del Proyecto

Sistema de gestión para la tienda de chocolates Wonka que permite:

-   Registro y autenticación de usuarios
-   Gestión completa de categorías (marcas) de productos
-   CRUD completo de productos con relación a categorías
-   API RESTful con autenticación por tokens
-   Enrutamiento
-   Integración con bases de datos mediante Eloquent ORM
-   Controladores y vistas
-   Migraciones y Seeders
-   Arquitectura MVC (Modelo - Vista - Controlador)

---

## Tecnologías Utilizadas

-   **Laravel** (PHP framework)
-   **Composer** (gestor de dependencias PHP)
-   **MySQL / MariaDB** (base de datos)
-   **Visual Studio Code** (IDE sugerido)

---

## Estructura de la Base de Datos

### Tabla: users

-   id, name, email, password, timestamps

### Tabla: marcas (categorías)

-   id, nombre, descripcion, timestamps

### Tabla: productos

-   id, nombre, precio, descripcion, stock, marca_id (FK), timestamps

## Datos de Prueba

El sistema incluye seeders con datos de prueba:

### Usuario de prueba:

-   Email: wonka@chocolate.com
-   Password: 12345678

## License

Este proyecto es parte de un examen académico para el Taller de Aplicaciones de Internet.
