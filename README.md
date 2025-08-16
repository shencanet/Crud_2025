# 🛠️ CRUD en Laravel - Proyecto de Práctica

Este repositorio contiene un proyecto básico de Laravel que implementa operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una entidad de ejemplo, como parte de una práctica de aprendizaje del framework Laravel.

> 💡 Basado en el curso **"Laravel: CRUD y Despliegue de Aplicaciones Web"** de Udemy.

---

## 🚀 Características

- 🔄 Operaciones CRUD completas con controladores y vistas
- 🗂️ Uso de migraciones y seeders
- 🧩 Blade templates para el frontend
- 🧪 Validaciones de formularios
- 🌐 Rutas RESTful
- 🔐 Protección CSRF y validaciones del lado del servidor
- 🎯 Estructura clara siguiendo el patrón MVC de Laravel

---

## 📦 Requisitos

- PHP >= 8.1
- Composer
- MySQL o cualquier otro sistema de base de datos compatible
- Laravel 10+
- Node.js y NPM (para recursos frontend si usas Laravel Mix)

---

## ⚙️ Instalación

```bash
# Clona el repositorio
git clone https://github.com/tu-usuario/laravel-crud-ejemplo.git
cd laravel-crud-ejemplo

# Instala dependencias PHP
composer install

# Copia el archivo de entorno
cp .env.example .env

# Genera la clave de aplicación
php artisan key:generate

# Configura tu base de datos en el archivo .env
DB_DATABASE=crud_laravel
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

# Ejecuta las migraciones
php artisan migrate

# (Opcional) Ejecuta seeders si están disponibles
php artisan db:seed

# Inicia el servidor de desarrollo
php artisan serve


| Módulo                    | Descripción                                                                 |
|---------------------------|-----------------------------------------------------------------------------|
| Introducción a Laravel    | Arquitectura del framework, instalación y entorno de desarrollo inicial     |
| Operaciones CRUD          | Creación de rutas, controladores y vistas para crear, leer, actualizar y eliminar datos |
| Buenas prácticas          | Seguridad, eficiencia y mantenibilidad del código                           |
| Optimización              | Caché de rutas y vistas, configuración para producción                      |
| Despliegue en producción  | Uso de cPanel, configuración de base de datos y entorno de hosting          |
| Herramientas adicionales  | Otras prácticas y herramientas complementarias útiles                       |
|---------------------------|-----------------------------------------------------------------------------|

---

##  Requisitos previos

- Conocimientos básicos de **PHP**, **HTML**, **CSS**, **SQL**
- Familiaridad básica con la **línea de comandos**
- Entorno de desarrollo configurado (por ejemplo, Composer, servidor local)

---

##  Cómo usar este repositorio

1. Clona este repositorio a tu entorno local:
   ```bash
   git clone <URL_del_repositorio>
   cd nombre-del-repo
