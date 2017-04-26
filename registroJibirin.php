<?php


//data base connection
require("../datos_conexion.php");

$pri = $_GET['prioridad'];
$tar = $_GET['tarea'];
$des = $_GET['descripcion'];
$ini = $_GET['inicio'];
$fin = $_GET['fin'];
$est = $_GET['estado'];

$conexion=mysqli_connect($db_host, $db_user, $db_pass);		
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";		
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO actualizaciones (Actu_Pri, Actu_Tar, Actu_Desc, Actu_Ini, Actu_Fin, Actu_Est) VALUES ('$pri', '$tar', '$des', '$ini', '$fin', '$est');";



 $resultados_comprobacion=mysqli_query($conexion, $consulta);


header("location:javascript://history.go(-1)");

  mysqli_close($conexion);

?>