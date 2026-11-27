# BookManager

Panel administrativo para gestionar el inventario de títulos y la red de tiendas de una librería. El proyecto utiliza PHP 8, Bootstrap 5 y una arquitectura preparada para integrar MySQL mediante PDO.

## Estado actual

La primera versión contiene el diseño completo del dashboard, navegación responsive, vistas de Tiendas y Títulos, formularios y validaciones de interfaz. La persistencia MySQL y los modelos PDO se desarrollarán en la siguiente fase.

## Ejecutar localmente

1. Copia el proyecto dentro de `C:\laragon\www\bookmanager`.
2. Inicia Apache desde Laragon.
3. Visita `http://localhost/bookmanager`.

También puede ejecutarse con el servidor incluido de PHP:

```bash
php -S localhost:8000
```

## Estructura

```text
bookmanager/
├── assets/          Estilos y comportamiento de la interfaz
├── config/          Configuración general y ejemplo de conexión
├── data/            Información temporal para la maqueta navegable
├── docs/            Plan de trabajo y criterios de integración
├── includes/        Layout, navegación y utilidades compartidas
├── models/          Espacio reservado para los modelos PDO
├── views/
│   ├── tiendas/     Pantallas del CRUD de tiendas
│   └── titulos/     Pantallas del CRUD de títulos
└── index.php        Dashboard principal
```

## Equipo

- **Bryant:** identidad visual, dashboard, componentes, vistas, experiencia responsive y validaciones de formularios.
- **Stanley:** esquema MySQL, conexión PDO, modelos, integración CRUD, pruebas de persistencia y despliegue.

La distribución detallada se encuentra en [docs/DIVISION_TRABAJO.md](docs/DIVISION_TRABAJO.md).

## Seguridad

Las credenciales reales no deben subirse al repositorio. El archivo `.env.example` documenta las variables necesarias y `.env` está excluido por Git.

