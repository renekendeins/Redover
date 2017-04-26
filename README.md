# jibi
Jibirin aka Jibi es una aplicación muy util para monitorizar las tareas pendientes y las ya realizadas
sobre cualquier tipo de proyecto ya sea desarrollo de software, desarrollo web o tareas diarias o de trabajo.

------------- CONFIGURACIÓN ---------------
1. Descargar el proyecto y guardarla dentro de un servidor o servidor local
2. Añadir un archivo "datos_conexion.php" en el que indicaremos las credenciales de nuestra base de datos. Ejemplo:

<?php
    $db_host="localhost";                     // direccion base de datos
    $db_nombre ="nombre_de_mi_base_de_datos"; // nombre de la bdd
    $db_user="mi_usuario";                    // nombre de usuario de la bdd
    $db_pass="mi_contraseña";                 // contraseña de acceso a nuestra base de datos
?>

3. Creamos una base de datos con el mismo nombre que hemos indicado anteriormente
4. Creamos una nueva tabla llamada "actualizaciones" . Los nombres y propiedades de las columnas serán los siguientes:

	- Actu_Id (INTEGER, PRIMARY KEY, NOT NULL, AUTO_INCREMENT)
	- Actu_Pri (VARCHAR(1), NOT NULL)
	- Actu_Tar (TEXT, NOT NULL)
	- Actu_desc (TEXT, NOT NULL)
	- Actu_Ini (VARCHAR(10), NOT NULL)
	- Actu_Fin (VARCHAR(10), NOT NULL)
	- Actu_Est (VARCHAR(15), NOT NULL)

------------ USO DE LA APLICACIÓN ----------

1. Abrir el archivo "index.php"
2. En la parte superior podemos observar unas casillas de texto, allí es donde iniciaremos nuestras tareas
3. En la parte inferior nos aparecerán las tareas una vez estén finalizadas
4. El final de la página hay información acerca de cómo introducir la información.


------------ CREANDO TAREAS ----------------

1. Introducir los datos correspondientes en las casillas de texto de iniciación
	i) Podemos iniciar el estado dependiendo de si ya hemos empezado la tarea, aún está por realizar o se debe revisar
	ii) Pulsando sobre el botón de RESETEAR eliminaremos la información de las casillas para introducir otra tarea

2. Las tareas se mostrarán por prioridad descendiente, es decir irá de las tareas con prioridad 0 a 9
3. También se puede eliminar la tarea pulsando en ELIMINAR
4. Actualizando las tareas:
	i) En cualquier momento puede modificar la información de la tarea
	ii) Cambie el estado según vaya realizando las tareas
	iii) Para finalizar una tarea es obligatorio cambiar el estado a "Finalizado" y pulsar el botón de actualizar


------------ RECUPERANDO TAREAS FINALIZADAS ----------------

1. Si desea seguir trabajando sobre una tarea que anterior mente marcó como "Finalizada" cambie su estado a cualquier otro que no sea 
   "Finalizado" y pulse en el botón de REVISAR



