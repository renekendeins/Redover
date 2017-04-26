<?php



require("../datos_conexion.php");

if(isset($_POST['prioridad'])){
	$pri = $_POST['prioridad'];
}else{
	$pri = "";
}

if(isset( $_POST['tarea'])){
	$tar = $_POST['tarea'];
}else{
	$tar = "";
}

if(isset($_POST['descripcion'])){
	$des = $_POST['descripcion'];
}else{
	$des = "";
}

if(isset($_POST['inicio'])){
	$ini = $_POST['inicio'];
}else{
	$ini = "";
}

if(isset($_POST['fin'])){
	$fin = $_POST['fin'];
}else{
	$fin = "";
}

if(isset($_POST['estado'])){
	$est = $_POST['estado'];
}else{
	$est = "";
}

if(isset($_POST['ide'])){
	$ide = $_POST['ide'];
}else{
	$ide = "";
}


$conexion=mysqli_connect($db_host, $db_user, $db_pass);		
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";		
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion, "utf8");


if (isset($_POST['actualizar']) || isset($_POST['revisar'])) {
	
echo "Acctualizar";
	
	$consulta = "UPDATE actualizaciones SET Actu_Pri = '$pri', Actu_Tar = '$tar', Actu_Desc = '$des', Actu_Est = '$est', Actu_Ini = '$ini', Actu_Fin = '$fin' WHERE Actu_Id = '$ide' ;";

} else if (isset($_POST['eliminar'])) {
	echo "eliminar";
    $consulta = "DELETE FROM actualizaciones WHERE Actu_Id = '$ide'";

} else {
	echo "Hola";

   }




 $resultados_comprobacion=mysqli_query($conexion, $consulta);


header("location:index.php");

  mysqli_close($conexion);

?>