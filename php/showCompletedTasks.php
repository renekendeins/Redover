<?php

/*MUESTRA LOS RESULTADOS EN LA STAGE AREA*/

//data base connection
require("db_con.php");



$query = "SELECT ID, PRIORITY, NAME, DESCRIPTION, END, START, STATUS, DATE, CREATOR, DOER FROM list_n  WHERE STATUS = 2 ORDER BY PRIORITY ASC";



    $result = $base -> prepare($query);
    $result -> execute(array());
    $counter = 0;

  while($row = $result -> fetch(PDO::FETCH_ASSOC)){
    	$counter++;
    	$status = $row['STATUS'];
    	if($status == 1){
    		$status == 'In process';
    	}else if($status == 2){
    		$status = 'Finished';
    	}else if($status == 3){
    		$status = 'Waiting for modifications';
    	}else if($status == 4){
    			$status = 'On hold';
    	}else{
    		$status = 'Error on status';
    	}

    	$creator = $row['CREATOR'];
    	$doer = $row['DOER'];
    	$start = $row['START'];	
    	$end = $row['END'];





    	$ide = $row['ID'];
		echo '<form method="post" action="php/updateTask.php">';
		echo '<tr>';

		echo '<td><div id="info_'.$counter.'" onclick="toggleInfo(this.id)" class="pointer hover-bc-yellow" style="line-height:1.3; width:30px;height:30px;background-color:rgb(43,178,221);font-size:24px;text-align:center;position:relative"><i class="fa fa-info"></i>
				<ul id="infoPanel_'.$counter.'" style="width:300px; font-size:15px; list-style:none;padding-left:0px;background-color:#d9ddde; border:1px solid rgb(180,180,180);padding:5px; display:none; position:absolute;top:25px" class="txt-left" >
					<li>From:<span style="font-weight:100"> '.$creator.'</span></li>
					<li>Doer: <span style="font-weight:100">'.$doer.'</span></li>
					<li>Creation date: <span style="font-weight:100">'.$start.'</span></li>
					<li>Finishing date: <span style="font-weight:100">'.$end.'</span></li>
				</ul>





			</div></td>';
		echo '<td><input type="text" class="input" name="priority" value="'. $row['PRIORITY'] .'"></td>';
		echo '<td><input type="text" class="input" name="name" value="'. $row['NAME'] .'"></td>';
		echo '<td><textarea type="text" class="input" name="description">'. $row['DESCRIPTION'] .'</textarea></td>';
		// echo '<td><input type="text" class="input" name="inicio" value="'. $row['START'] .'"></td>';
		// echo '<td><input type="text" class="input" name="fin" value="'. $row['END'] .'"></td>';
		echo '<td>';
		echo '	<select class="select" onchange="validarEstado()" name="status" >';
		echo '      <option value="'. $status .'"> '. $status .'</option>';
		echo '		<option class="pendiente" value="4">On hold</option>';
		echo '		<option class="proceso" value="1">In process</option>';
		echo '		<option class="revisado" value="3">Waiting for modifications</option>';
		echo '		<option class="finalizado" value="2">Finished</option>';
		echo '	</select>';


	echo '	</td>';

	echo '	<td style="text-align: right;"><input type="text" name="ide" value="'. $row['ID'].'" style="display: none"><button type="submit" name="update" value="update" class="actualizar">UPDATE</button></td>';
	echo '	<td style="text-align: right;"><button type="submit" name="delete" value="eliminar" class="delete">DELETE</button>';
	echo '<input value="' .$row['ID'] . '" style="display: none" name="ide" >';
		
echo '	</tr></form>';
    }









?>