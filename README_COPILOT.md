# Usar GitHub Copilot en este proyecto PHP

Este archivo explica, en español, cómo aprovechar GitHub Copilot para trabajar con los archivos PHP en este repositorio.

## Requisitos previos
- VS Code instalado
- Cuenta de GitHub y suscripción a GitHub Copilot (o acceso habilitado en tu cuenta)
- Extensión "GitHub Copilot" instalada en VS Code (y opcionalmente "GitHub Copilot Chat" para conversaciones)

## Instalación rápida de la extensión
1. Abre VS Code y ve a Extensiones (Ctrl+Shift+X).
2. Busca "GitHub Copilot" e instala la extensión oficial.
3. Sigue el proceso de inicio de sesión con tu cuenta de GitHub.

## Flujo de trabajo básico con PHP
1. Abre la carpeta del proyecto en VS Code.
2. Abre un archivo PHP, por ejemplo `01_variables.php`.
3. Escribe un comentario descriptivo sobre lo que quieres que Copilot genere. Ejemplos:
   ```php
   // Escribe una función PHP llamada suma($a, $b) que valide que los argumentos sean números y devuelva la suma.
   ```
4. Copilot propondrá automáticamente una sugerencia. Para aceptar la sugerencia usa TAB o la flecha derecha (dependiendo de tu configuración de sugerencias de VS Code).
5. Si quieres una alternativa, mantén el cursor y usa el comando de Copilot desde la paleta (Ctrl+Shift+P) -> "GitHub Copilot: Mostrar sugerencias" o abre Copilot Chat para pedir variaciones.

## Buenas prácticas al pedir código a Copilot
- Da contexto: incluye el objetivo, tipos esperados y ejemplos de entrada/salida en comentarios.
- Empieza por funciones pequeñas y pruebas unitarias.
- Revisa siempre el código generado; Copilot no garantiza que la solución sea óptima o segura.
- Evita exponer secretos en los comentarios o en el repo (Copilot usa el contexto del archivo).

## Ejemplos de prompts útiles (ponlos como comentarios en tus archivos PHP)
- "// Implementa una clase Persona con propiedades nombre y edad y un método saludar() que devuelva un string." 
- "// Crea tests para la función suma usando PHPUnit: cubre casos de números, flotantes y valores no numéricos."
- "// Reescribe la función X para que use tipos estrictos y manejo de errores con excepciones."

## Copilot Chat (si lo tienes)
- Abre la vista Copilot Chat (extensión Copilot Chat) para hacer preguntas en lenguaje natural, pedir explicaciones línea a línea o solicitar refactorizaciones.
- Ejemplo de pregunta: "Refactoriza la función suma para que lance InvalidArgumentException si los argumentos no son numéricos."

## Integración con Git
- Usa Copilot para generar commit messages útiles: escribe un comentario con el resumen y pide a Copilot que proponga un mensaje.
- Revisa siempre los cambios antes de confirmar.

## Ejercicio recomendado para empezar
1. Ejecuta `php .\01_variables.php` en PowerShell y observa la salida.
2. En `02_funciones.php`, añade un comentario pidiendo a Copilot una función `suma` y acepta la sugerencia.
3. Agrega un test pequeño (PHPUnit) y pide a Copilot que genere el test.

## Recursos
- Manual PHP: https://www.php.net/manual/es/
- GitHub Copilot docs: https://docs.github.com/en/copilot

---