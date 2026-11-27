# División de trabajo

## Bryant - Frontend y soporte de aplicación

- Diseñar el dashboard y la identidad visual de BookManager.
- Crear sidebar, header, tablas, formularios, estados vacíos y confirmaciones.
- Implementar las vistas de Tiendas y Títulos.
- Garantizar navegación responsive y accesibilidad básica.
- Añadir validaciones de campos obligatorios, precios y valores numéricos.
- Revisar consistencia visual durante la integración con el backend.

## Stanley - Base de datos y backend

- Preparar `database/schema.sql` con las tablas `tiendas`, `titulos` y `publicadores`.
- Añadir datos iniciales en `database/seed.sql`.
- Implementar `config/Database.php` con PDO y variables de entorno.
- Desarrollar `models/Tienda.php`, `models/Titulo.php` y `models/Publicador.php`.
- Integrar las operaciones crear, leer, actualizar y eliminar con sentencias preparadas.
- Cargar el selector de editoriales desde `publicadores`.
- Probar validaciones del servidor, errores y redirecciones.
- Importar la base de datos y publicar el proyecto en InfinityFree.

## Trabajo conjunto

- Revisar las rutas antes del despliegue.
- Probar los dos módulos de principio a fin.
- Preparar capturas y documento final.
- Verificar que ninguna credencial quede dentro del repositorio.

## Flujo de ramas

- `main`: versión estable.
- `feature/frontend-bryant`: cambios de interfaz.
- `feature/backend-stanley`: base de datos y lógica PHP.
- Los cambios se integran mediante pull request después de una revisión rápida.

