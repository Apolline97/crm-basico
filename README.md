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

## 👤 Usuarios y Contraseñas

- ADMINISTRADOR (Acceso total (Ver, Crear, Editar y Borrar))
  - Mail: admin@prueba.com
  - Contraseña: 12345678
 
- EMPLEADO (Acceso restringido (NO puede borrar))
  - Mail: empleado@prueba.com
  - Contraseña: 12345678
