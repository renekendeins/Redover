<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>REDOVER</title>
		<link rel="stylesheet" href="css/style.css"">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body style="padding:10px">
	<?php 
		require('php/statistics.php');
		session_start();
		if(!isset($_SESSION['user'])){
			header('location:index.php');
		}
	 ?>
		
		<p style='margin-top:0px'><span class="txt-left" style='font-size:30px'><img style="max-width:50px" src="img/redover.png"/>REDOVER</span><span class='txt-right' style='float:right'><a href='php/exit.php'> EXIT </a></span></p>
		
		<div class="wrap-content">
			<div class="header"> 
				<table class="create-task" style="line-height:0;">
				<form method="post" action="php/newTask.php">
					<tr>
						<td style="width:10%"><input type="text" class="input" name="priority" placeholder="Priority" ></td>
						<td style="width:30%"><input type="text" class="input"  name="name" placeholder="Task name" ></td>
						<td style="width:50%"><textarea type="text" class="input" name="description" placeholder="Task description" ></textarea></td>
		<!-- 				<td><input type="text" class="input" name="start" id="inicio"></td>
						<td><input type="text" class="input" name="end" id="fin"></td> -->
						<td>
							<select class="select" title="Task status" style="height:35px" onchange="validarEstado()" name="status" id="estado">
								<option  value="4">On hold</option>
								<option  value="1">In process</option>
								<option  value="3">Waiting for modifications</option>
								<option  value="2">Finished</option>
							</select>
						</td>
						<td><button type="submit"  style="height:35px" name="anadir" class="anadir">ADD</button></td>
						
						<td><button type="reset"  style="height:35px" name="reset" id="reset">RESET</button></td>
						
					</tr>
					</form>
				</table>
			</div>
<div id="toggleStatistics" title="Show statistics" class="width-100 txt-center pointer" style="height: 30px;margin-top: 10px;background-color: #d9ddde;"><i class="fa fa-angle-double-down" style="font-size:24px"></i></div>
			<div id="statistics" class="header-3" style="position:relative; display:none">
			<span>STATISTICS:</span>

				<table class="txt-20 txt-right width-100" >
					<tbody>
						<tr style="background-color: gray">
							<th class="txt-left width-25">Total tasks:</th> <td style="padding-left:5px" class="txt-left"><?php echo $totalTasks; ?></td>
						</tr>
						<tr>
							<th class="txt-left width-25">Pending tasks: </th><td style="padding-left:5px" class="txt-left"><?php echo $pendingTasks; ?></td>
						</tr>
						<tr style="background-color: gray">
							<th class="txt-left width-25">Completed tasks:</th> <td style="padding-left:5px" class="txt-left"><?php echo $finishedTasks; ?></td>
						</tr>
						
						<tr>
							<th class="txt-left width-25">Tasks on hold:</th> <td style="padding-left:5px" class="txt-left"><?php echo $onHoldTasks; ?></td>
						</tr>
						<tr style="background-color: gray">
							<th class="txt-left width-25">Tasks to be modified:</th> <td style="padding-left:5px" class="txt-left"><?php echo $toBeModifiedTasks ?></td>
						</tr>
						<tr>
							<th class="txt-left width-25">Tasks in process:</th> <td style="padding-left:5px" class="txt-left"><?php echo $inProcessTasks ?></td>
							
						</tr>
					</tbody>
				</table>
			</div>
			<table class="main-table">
				<!-- <tr>
					<td>PRIORIDAD*</td>
					<td>TAREA</td>
					<td>DESCRIPCIÓN</td>
					<td>INICIO*</td>
					<td>FÍN*</td>
					<td>ESTADO*</td>
					<td></td>
					<td></td>
					
				</tr> -->
				<?php require('php/showPendingTasks.php'); ?>
				
				
				
			</table>
			
		</div>
		<div class="header-2"> COMPLETED TASKS</div>
		<table class="finished-table">
			<?php require('php/showCompletedTasks.php'); ?>
		</table>
	</body>
	<script type="text/javascript" src="jQuery/jquery.js"></script>
	<script type="text/javascript" src="jQuery/script.js"></script>
</html>