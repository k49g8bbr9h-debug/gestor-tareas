# Respuestas Teóricas

**1. ¿Qué es el patrón MVC y qué responsabilidad tiene cada parte?**

MVC significa Modelo-Vista-Controlador. El **Modelo** gestiona los datos y la lógica de negocio, interactuando directamente con la base de datos. La **Vista** es lo que ve el usuario, solo muestra información sin procesar lógica. El **Controlador** es el intermediario: recibe las peticiones del usuario, consulta el modelo y le envía los datos a la vista.

**2. Diferencia entre GET y POST. ¿Cuándo usarías cada uno?**

**GET** se usa para solicitar información al servidor; los datos viajan visibles en la URL y no modifica nada, solo consulta. **POST** envía datos de forma oculta en el cuerpo de la petición y se usa para crear o modificar recursos. Usaría GET para mostrar una lista o un formulario, y POST para enviar ese formulario y guardar los datos.

**3. ¿Qué es Eloquent en Laravel y qué problema resuelve?**

**Eloquent** es el ORM de Laravel. Es una capa que permite interactuar con la base de datos usando PHP en lugar de escribir SQL directamente. El problema que resuelve es que no necesitas conocer SQL a profundidad para hacer operaciones como crear, leer, actualizar o eliminar registros — el código queda más limpio, legible y además protege automáticamente contra ataques de inyección SQL.

**4. ¿Qué hace `php artisan migrate` y para qué sirven las migraciones?**

`php artisan migrate` ejecuta todos los archivos de migración pendientes y crea las tablas en la base de datos. Las migraciones permiten describir la estructura de la base de datos en código PHP en lugar de crearla manualmente en MySQL. Esto trae varias ventajas: cualquier persona que clone el proyecto puede recrear la base de datos con un solo comando, se pueden revertir cambios con `migrate:rollback`, y en Git queda registrado el historial de evolución de la base de datos.

**5. Diferencia entre `==` y `===` en PHP.**

`==` compara solo el valor realizando conversión de tipo automática, mientras que `===` compara el valor y el tipo exacto sin conversión. Por ejemplo: `0 == false` retorna `true` porque PHP convierte `false` a `0`, pero `0 === false` retorna `false` porque uno es `integer` y el otro es `boolean`. El `===` es más seguro porque evita comparaciones inesperadas.

**6. ¿Qué es Composer y cuál es la diferencia entre `composer install` y `composer update`?**

**Composer** es el gestor de dependencias de PHP — permite instalar y administrar librerías de terceros en un proyecto. `composer install` lee el archivo `composer.lock` e instala las versiones exactas que están registradas, ideal para cuando se clona un proyecto y se quiere garantizar que todos trabajen con las mismas versiones. `composer update` busca e instala las versiones más recientes disponibles y actualiza el `composer.lock`.

**7. En Git, ¿cuál es la diferencia entre `git pull` y `git fetch`?**

`git fetch` descarga los cambios del repositorio remoto pero no los aplica al código local, permitiendo revisarlos primero. `git pull` descarga los cambios y los aplica automáticamente — equivale a hacer `git fetch` + `git merge` en un solo comando. En equipos se prefiere `git fetch` para revisar los cambios antes de integrarlos y evitar conflictos inesperados.