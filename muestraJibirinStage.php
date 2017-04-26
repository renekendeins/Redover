<?php

/*MUESTRA LOS RESULTADOS EN LA STAGE AREA*/

//data base connection
require("../datos_conexion.php");


$conexion=mysqli_connect($db_host, $db_user, $db_pass);		
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";		
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion, "utf8");


$insert = "SELECT Actu_Id, Actu_Pri, Actu_Tar, Actu_Desc, Actu_Ini, Actu_Fin, Actu_Est FROM actualizaciones WHERE Actu_EsT IN ('Pendiente', 'En proceso', 'Revisar') ORDER BY Actu_Pri ASC";

 $resultados=mysqli_query($conexion, $insert);

while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {

$estado = $fila['Actu_Est'];

	echo '<tr>';
		echo '<td><form method="post" action="actualizarJibirin.php">';
		echo '<input type="text" class="input" name="prioridad" value="'. $fila['Actu_Pri'] .'"></td>';
		echo '<td><input type="text" class="input" name="tarea" value="'. $fila['Actu_Tar'] .'"></td>';
		echo '<td><textarea type="text" class="input" name="descripcion">'. $fila['Actu_Desc'] .'</textarea></td>';
		echo '<td><input type="text" class="input" name="inicio" value="'. $fila['Actu_Ini'] .'"></td>';
		echo '<td><input type="text" class="input" name="fin" value="'. $fila['Actu_Fin'] .'"></td>';
		echo '<td>';
		echo '	<select class="select" onchange="validarEstado()" name="estado" >';
		echo '      <option value="'. $estado .'"> '. $estado .'</option>';
		echo '		<option class="pendiente" value="Pendiente">Pendiente</option>';
		echo '		<option class="proceso" value="En proceso">En proceso</option>';
		echo '		<option class="revisado" value="Revisar">Revisar</option>';
		echo '		<option class="finalizado" value="Finalizado">Finalizado</option>';
		echo '	</select>';


	echo '	</td>';

	echo '	<td><input type="text" name="ide" value="'. $fila['Actu_Id'].'" style="display: none"><button type="submit" name="actualizar" value="actualizar" class="actualizar">ACTUALIZAR</button></td>';
	echo '	<td><button type="submit" name="eliminar" value="eliminar" class="eliminar">ELIMINAR</button>';
	echo '<input value="' .$fila['Actu_Id'] . '" style="display: none" name="ide" ></form></td>';
		
echo '	</tr>';





}



  mysqli_close($conexion);

?>