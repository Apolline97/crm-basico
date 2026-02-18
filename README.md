# ✌️ CRM Laravel - Segunda Entrega

Este proyecto es un sistema de gestión CRM desarrollado en Laravel. Incluye gestión de clientes con imágenes, productos con fichas técnicas en PDF, y un sistema de roles y permisos (Admin vs Empleado).

---

## 🚀 Funcionalidades Implementadas

### 1. Gestión de Clientes (CRUD Completo)
- Listado avanzado con **DataTables** (Buscador, paginación y ordenación en tiempo real).
- Subida de **Foto de Perfil** (validación de imágenes y visualización en miniatura).
- Edición y Eliminación de clientes.

### 2. Gestión de Productos
- Subida de archivos **PDF** (Fichas técnicas).
- Botón para descargar/visualizar el PDF subido.
- Listado con DataTables integrado.

### 3. Roles y Permisos (Seguridad)
- **Sistema de Login** con autenticación.
- Dos roles de usuario:
  - **Admin:** Acceso total (Ver, Crear, Editar y **Borrar**).
  - **Usuario/Empleado:** Acceso restringido (Ver, Crear y Editar, pero **NO puede Borrar**).
- Protección de rutas y ocultación de botones según el rol.

### 4. Interfaz
- Diseño responsivo con **Bootstrap 5**.
- Integración de menú de navegación dinámico (cambia según si estás logueado o no).

---

## 🛠️ Instalación y Configuración

Para poner en marcha el proyecto en un entorno local, sigue estos pasos:

### 1. Instalar dependencias

Abre una terminal en la carpeta del proyecto y ejecuta:

```bash
composer install
```

### 2. Configurar el entorno

Duplica el archivo `.env.example`, renómbralo a `.env` y configura tu conexión a la base de datos:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crm_db
DB_USERNAME=root
DB_PASSWORD=
```

> Asegúrate de crear una base de datos vacía llamada `crm_db` en tu gestor SQL.

### 3. Generar clave de aplicación

```bash
php artisan key:generate
```

### 4. Base de datos y usuarios ⚠️

Este comando crea las tablas e inserta automáticamente los usuarios Admin y Empleado:

```bash
php artisan migrate:fresh --seed
```

### 5. Activar almacenamiento de archivos

Para que se visualicen correctamente las imágenes de perfil y los PDFs, es obligatorio ejecutar:

```bash
php artisan storage:link
```

### 6. Ejecutar el servidor

```bash
php artisan serve
```

Accede a la aplicación en: `http://127.0.0.1:8000`

---

## 👤 Usuarios y Contraseñas

| Rol | Email | Contraseña | Permisos |
|---|---|---|---|
| **Administrador** | admin@prueba.com | 12345678 | Ver, Crear, Editar y **Borrar** |
| **Empleado** | empleado@prueba.com | 12345678 | Ver, Crear y Editar (**NO puede Borrar**) |
