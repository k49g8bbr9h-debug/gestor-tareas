# Gestor de Tareas

Aplicación web de gestión de tareas personales construida con Laravel.

## Autor
**Juan Esteban Niño**

## Tecnologías usadas
- PHP 8.5.7
- Laravel 13.x
- SQLite
- Blade (motor de plantillas)
- CSS plano

## Requisitos previos
- PHP 8.1 o superior
- Composer
- Git

## Pasos para correr el proyecto localmente

**1. Clonar el repositorio**
```bash
git clone <url-del-repositorio>
cd gestor-tareas
```

**2. Instalar dependencias**
```bash
composer install
```

**3. Configurar el entorno**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Configurar la base de datos**

Edita el archivo `.env` y configura:

DB_CONNECTION=sqlite
DB_DATABASE=/ruta/absoluta/a/database/database.sqlit

Luego crea el archivo de base de datos:
```bash
touch database/database.sqlite
```

**5. Ejecutar migraciones**
```bash
php artisan migrate
```

**6. Iniciar el servidor**
```bash
php artisan serve
```

Visita `http://127.0.0.1:8000` en tu navegador.

## Funcionalidades
- Crear, editar y eliminar tareas
- Marcar tareas como completadas
- Prioridades: baja, media, alta
- Fecha límite opcional
- Validaciones en español
- Mensajes flash de confirmación