# Tarea 9 - Desarrollo de Aplicaciones Web (DWES)

Este proyecto consiste en una aplicación PHP modular que consume la API REST de **Rick and Morty**.

## Características técnicas:
- **Arquitectura Modular:** Separación de lógica (PHP), diseño (CSS) y vista (HTML).
- **Consumo de API:** Implementado mediante **cURL** con gestión de timeouts y seguridad SSL.
- **Diseño:** Interfaz visual adaptativa (Responsive) mediante CSS Grid.
- **Rendimiento:** Validado con pruebas de carga en JMeter para 200 usuarios concurrentes.

## Estructura del Proyecto:
- `index.php`: Controlador principal.
- `API.Rick.php`: Lógica de conexión con la API (cURL).
- `index.php`: Estructura de la página.
- `estilos.css`: Hoja de estilos externa.
