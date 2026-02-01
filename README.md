# CRM Básico - Gestión Empresarial

Este proyecto es un CRM (Customer Relationship Management) desarrollado en Laravel como parte de la primera entrega de desarrollo web. Simula una aplicación de gestión empresarial permitiendo administrar la información clave de un negocio.

## 📋 Módulos Implementados

El sistema cuenta con 5 módulos funcionales (CRUD completo: Crear, Leer, Actualizar, Borrar):

1.  **Clientes** (Obligatorio): Gestión de cartera de clientes (Nombre, Email, Teléfono, Dirección).
2.  **Productos**: Control de inventario (Precio, Stock, Descripción).
3.  **Proveedores**: Agenda de proveedores y empresas.
4.  **Categorías**: Clasificación de productos.
5.  **Empleados**: Gestión de la plantilla de trabajadores.

## 🚀 Requisitos del Sistema

* PHP 8.2 o superior.
* Composer.
* Servidor de Base de Datos (MySQL / MariaDB via XAMPP).
* Laravel Framework.

## 🔧 Instalación y Puesta en Marcha

Si descargas este proyecto en un entorno nuevo, sigue estos pasos:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/Apolline97/crm-basico.git](https://github.com/Apolline97/crm-basico.git)
    cd crm-basico
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar entorno:**
    * Duplica el archivo `.env.example` y renómbralo a `.env`.
    * Configura tus credenciales de base de datos en el `.env`:
        ```ini
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=crm_db
        DB_USERNAME=root
        DB_PASSWORD=
        ```

4.  **Generar clave de aplicación:**
    ```bash
    php artisan key:generate
    ```

5.  **Migrar la base de datos:**
    ```bash
    php artisan migrate
    ```

6.  **Iniciar el servidor:**
    ```bash
    php artisan serve
    ```

## 👤 Usuarios de prueba
Actualmente, el sistema es de acceso público y **no requiere inicio de sesión** (Login) para gestionar los módulos.

## ✒️ Autor
* **Nombre del Alumno** (Apolline97)
* Enlace al repositorio: [https://github.com/Apolline97/crm-basico](https://github.com/Apolline97/crm-basico)