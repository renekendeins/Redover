$(".anadir").on('click', function(){



var pri = $("#prioridad").val();
var tar = $("#tarea").val();
var des = $("#descripcion").val();
var ini = $("#inicio").val();
var fin = $("#fin").val();
var est = $("#estado").val();

var renglon = '<tr>'
			+ '<td> <input type="text" class="input" value="'+pri+'"></td>'
			+ '<td><input type="text" class="input" value="'+tar+'"></td>'
			+ '<td><textarea type="text" class="input">'+des+'</textarea></td>'
			+ '<td><input type="text" class="input" value="'+ini+'"></td>'
			+ '<td><input type="text" class="input" value="'+fin +'"></td>'
			+ '<td>'
			+ '<select class="select" onchange="validarEstado()"  >'
			+ '<option value="Pendiente">Pendiente</option>'
			+ '<option value="En proceso">En proceso</option>'
			+ '<option value="Revisar">Revisar</option>'
			+ '<option class="finalizado" value="Finalizado">Finalizado</option>'
			+ '</select>'
			+ '</td>'
			+ '<td><button class="finalizar" type="submit" name="finalizar" onclick="aceptar()">ACTUALIZAR</button></td>'
			+ '<td><button type="button" name="eliminar" class="eliminar">ELIMINAR</button></td>'	
			+ '</tr>';

$(".main-table").append(renglon);




});







function eliminar(){
	$(this).parent().parent().remove();
}

 // $(".eliminar").on("click", function(){
 // 	$(this).parent().parent().remove();
 // });




$(".select").on("change", function(){

var estado = $(this).val();

if(estado == 'Revisar'){
	$(this).css('background-color', 'yellow');
}else if(estado == 'En proceso'){
	$(this).css('background-color', 'orange');
}else if(estado == 'Pendiente'){
	$(this).css('background-color', 'white');
}else{
	$(this).css('background-color', 'rgb(80,255,80)');
}

});











//





//});

















