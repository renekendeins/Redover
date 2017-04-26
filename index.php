<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>JIBI</title>
		<link rel="stylesheet" href="jibirinStyle.css"">
	</head>
	<body>

	
		
		<div class="wrap-content">
			<div class="header"> JIBI   
			<table class="create-task">
<tr>
					<td><form method="get" action="registroJibirin.php"><input type="text" class="input" name="prioridad" id="prioridad"></td>
					<td><input type="text" class="input" name="tarea" id="tarea"></td>
					<td><textarea type="text" class="input" name="descripcion" id="descripcion"></textarea></td>
					<td><input type="text" class="input" name="inicio" id="inicio"></td>
					<td><input type="text" class="input" name="fin" id="fin"></td>
					<td>
						<select class="select" onchange="validarEstado()" name="estado" id="estado">
							<option class="pendiente" value="Pendiente">Pendiente</option>
							<option class="proceso" value="En proceso">En proceso</option>
							<option class="revisar" value="Revisar">Revisar</option>
							<option class="finalizado" value="Finalizado">Finalizado</option>
						</select>


					</td>
					<td><button type="submit" name="anadir" class="anadir">AÑADIR</button></td>
					
					<td><button type="reset" name="reset" id="reset">RESETEAR</button></form></td>
					
				</tr>


</table>
			</div>
			<table class="main-table">
				<tr>
					<td>PRIORIDAD*</td>
					<td>TAREA</td>
					<td>DESCRIPCIÓN</td>
					<td>INICIO*</td>
					<td>FÍN*</td>
					<td>ESTADO*</td>
					<td></td>
					<td></td>
					
				</tr>

				<?php require('muestraJibirinStage.php'); ?>
				
				
				
			</table>
			
		</div>



		<div class="header-2"> TAREAS FINALIZADAS</div>
		<table class="finished-table">
			<?php require('muestraJibirinFinalizado.php'); ?>
		</table>





		<div style="clear: both; margin-top: 150px" >
	<ul style="list-style-type: none; line-height: 0">
		<li><h6>* Prioridad: 0 máxima 9 mínima </h6></li>
		<li><h6> Inicio: fecha en la que se inició la tarea [dd/mm/aaaa] </h6></li>
		<li><h6> Fin: fecha de de fin o de la última revisión</h6></li>
		<li><h6> Estado: para volver a revisar una tarea ya finalizada se le deberà de canmbiar el estado a cualquiera que no sea "Finalizado"  </h6></li>
		<li></li>
		<li></li>
	</ul>


		</div>









	</body>
	<script type="text/javascript" src="../librerias/jquery.js"></script>
	<script type="text/javascript" src="jibirinScript.js"></script>
</html>