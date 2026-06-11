# Uso de Inteligencia Artificial

## 3.1 Declaración inicial

Herramientas usadas:
- [x] Claude (Anthropic)

## 3.2 Registro de prompts utilizados

**Prompt #1**
- **Prompt:** Ayúdame a realizar una prueba técnica de Laravel desde cero, explicándome cada paso.
- **Respuesta obtenida:** Guía paso a paso para instalar PHP, Composer, Git, crear el proyecto Laravel, migración, modelo, controlador y vistas.
- **Qué hice con esa respuesta:** Seguí cada paso, entendí el concepto antes de escribir el código y apliqué los cambios en mi proyecto.

**Prompt #2**
- **Prompt:** El modelo Tarea lanza MassAssignmentException al crear una tarea.
- **Respuesta obtenida:** Explicación del error y solución: en Laravel 11+ los casts deben definirse como método en lugar de propiedad, y agregar `$table` explícitamente.
- **Qué hice con esa respuesta:** Apliqué el cambio, entendí por qué Laravel tiene esa protección de seguridad y volví a probar.

## 3.3 Nivel de uso

- [x] **Nivel 2:** La usé para generar fragmentos de código que luego adapté y entendí.

## 3.4 Reflexión

**¿Qué parte resolviste sin IA?**
Las respuestas teóricas las construí con mis propias palabras después de entender cada concepto explicado. No copié definiciones — reformulé lo que entendí.

**¿Qué aprendiste durante la prueba aunque hayas llegado con ayuda de la IA?**
Aprendí cómo se estructura un proyecto Laravel desde cero: el flujo completo desde la migración hasta las vistas, cómo funciona el patrón MVC en la práctica, qué es Eloquent y por qué las migraciones son importantes en un equipo de trabajo.