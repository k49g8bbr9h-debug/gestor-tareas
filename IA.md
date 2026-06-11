# Uso de Inteligencia Artificial

## 3.1 Declaración inicial

Herramientas usadas:
- [x] Claude (Anthropic)

## 3.2 Registro de prompts utilizados

**Prompt #1**
- **Prompt:** Ayúdame a realizar una prueba técnica de Laravel desde cero, explicándome cada paso.
- **Respuesta obtenida:** Guía paso a paso para instalar PHP, Composer, Git, crear el proyecto Laravel, migración, modelo, controlador y vistas.
- **Qué hice con esa respuesta:** Seguí cada paso y apliqué los cambios. En cada uno pedí que me explicara el concepto antes de escribir el código para entender qué estaba haciendo.

**Prompt #2**
- **Prompt:** El modelo Tarea lanza MassAssignmentException al crear una tarea.
- **Respuesta obtenida:** Explicación del error y solución: en Laravel 11+ los casts deben definirse como método en lugar de propiedad estática.
- **Qué hice con esa respuesta:** Apliqué el cambio y entendí por qué Laravel tiene esa protección de seguridad.

**Prompt #3**
- **Prompt:** Ayúdame a redactar las respuestas teóricas explicándome cada concepto.
- **Respuesta obtenida:** Explicación de cada concepto (MVC, GET/POST, Eloquent, migraciones, etc.) y ayuda para redactar las respuestas con mis propias palabras.
- **Qué hice con esa respuesta:** Escuché la explicación, la reformulé con mis palabras y la IA la pulió manteniendo mi redacción base.

## 3.3 Nivel de uso

- [x] **Nivel 3:** La usé para generar bloques completos con poca modificación propia.

## 3.4 Reflexión

**¿Qué parte resolviste sin IA?**
Las respuestas teóricas las construí con mis propias palabras después de entender cada concepto. No copié definiciones — la IA me explicó y yo reformulé lo que entendí. También tomé decisiones propias sobre qué cambiar cuando algo no funcionaba.

**¿Qué aprendiste durante la prueba aunque hayas llegado con ayuda de la IA?**
Aprendí cómo se estructura un proyecto Laravel desde cero: el flujo completo desde la migración hasta las vistas, cómo funciona el patrón MVC en la práctica, qué es Eloquent, por qué las migraciones son importantes y cómo Git registra la evolución del proyecto. Aunque el código lo generó la IA, entendí qué hace cada parte y puedo explicarlo.