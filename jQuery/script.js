// $(".anadir").on('click', function(){



// var pri = $("#priority").val();
// var tar = $("#tarea").val();
// var des = $("#descripcion").val();
// var ini = $("#inicio").val();
// var fin = $("#fin").val();
// var est = $("#estado").val();

// var renglon = '<tr>'
// 			+ '<td> <input type="text" class="input" value="'+pri+'"></td>'
// 			+ '<td><input type="text" class="input" value="'+tar+'"></td>'
// 			+ '<td><textarea type="text" class="input">'+des+'</textarea></td>'
// 			+ '<td><input type="text" class="input" value="'+ini+'"></td>'
// 			+ '<td><input type="text" class="input" value="'+fin +'"></td>'
// 			+ '<td>'
// 			+ '<select class="select" onchange="validarEstado()"  >'
// 			+ '<option value="Pendiente">Pendiente</option>'
// 			+ '<option value="En proceso">En proceso</option>'
// 			+ '<option value="Revisar">Revisar</option>'
// 			+ '<option class="finalizado" value="Finalizado">Finalizado</option>'
// 			+ '</select>'
// 			+ '</td>'
// 			+ '<td><button class="finalizar" type="submit" name="finalizar" onclick="aceptar()">ACTUALIZAR</button></td>'
// 			+ '<td><button type="button" name="eliminar" class="eliminar">ELIMINAR</button></td>'	
// 			+ '</tr>';

// $(".main-table").append(renglon);




// });







function eliminar(){
	$(this).parent().parent().remove();
}

 // $(".eliminar").on("click", function(){
 // 	$(this).parent().parent().remove();
 // });




$(".select").on("change", function(){

var estado = $(this).val();

if(estado == '3'){
	$(this).css('background-color', 'yellow');
}else if(estado == '1'){
	$(this).css('background-color', 'orange');
}else if(estado == '4'){
	$(this).css('background-color', 'white');
}else if(estado == '2'){
	$(this).css('background-color', 'rgb(80,255,80)');
}else{
	alert("Error");
}

});

var statisticsCounter = 0;
$("#toggleStatistics").click(function(){



	if(statisticsCounter%2 == 0){
		$("#statistics").slideDown(300);
		$("#toggleStatistics").html('');
		$("#toggleStatistics").html('<i class="fa fa-angle-double-up" style="font-size:24px"></i>');

		statisticsCounter++;
	}else{
		$("#statistics").slideUp(300);
		$("#toggleStatistics").html('');
		$("#toggleStatistics").html('<i class="fa fa-angle-double-down" style="font-size:24px"></i>');
		statisticsCounter++;
	}

});


function toggleInfo(id){
	var ide = id.split('_');
	var position = ide[1];
	var css = $("#infoPanel_"+position).css('display');
	if(css == 'block'){
		$("#infoPanel_"+position).css('display','none');
		$("#"+id).css('background-color','rgb(43,178,221)');
	}else{
		$("#infoPanel_"+position).css('display','block');
		$("#"+id).css('background-color','yellow');
	}
	
}

$("#signupMail").change(function(){

    var mail = $("#signupMail").val();
    var length = mail.length;
    var counter = i = a = dot = at = 0;
    for(i=0;i<length;i++){
        if(mail[i] == '.'){
        }
        if(mail[i] == '@'){
            at++;
            break;            
        }
    }
    i ++;
    if(at == 1){
        for(a=i;a<length;a++){
            if(mail[a] == '@'){
                at++;
                break
            }
            if(mail[a] == '.'){
                dot++; 
            }
        }
    }else{

    }
    if(at > 1 || dot > 1 || at < 1 || dot < 1){
        $("#signupMail").css('border', '1px solid red');
    }else{
        $("#signupMail").css('border', '1px solid rgb(80,255,80)');
    }



});
function validateSignup(action){

    var signupUser = $("#signupUser").val();
    var signupMail = $("#signupMail").val();
    var signupPassword = $("#password").val();

    var signupRepeatPassword = $("#repeatPassword").val();
    var emailCss = $("#signupMail").css('border-color');

  
// alert(emailCss);


    if(signupUser !== "" && signupMail !== "" && signupPassword !== "" && signupRepeatPassword !== ""){
    	if(signupPassword !== signupRepeatPassword || signupPassword == "" || signupRepeatPassword == ""){
            $("#password").css('border', '1px solid red');
            $("#repeatPassword").css('border', '1px solid red');
            // alert("Your data are not correct");
           

          
        }else{
            $("#password").css('border', '1px solid rgb(80,255,80)');
            $("#repeatPassword").css('border', '1px solid rgb(80,255,80)');
            // contrasenasIguales();
       
        }
       
      
    }else{

        if(signupPassword !== signupRepeatPassword || signupPassword == "" || signupRepeatPassword == ""){
            $("#password").css('border', '1px solid red');
            $("#repeatPassword").css('border', '1px solid red');
            // alert("Your data are not correct");
          
        }else{
            $("#password").css('border', '1px solid rgb(80,255,80)');
            $("#repeatPassword").css('border', '1px solid rgb(80,255,80)');
            // contrasenasIguales();
       
        }
    }

    if(signupUser !== ""){
        if(signupMail !== ""){
            if(signupPassword !== "" ){
                if(signupRepeatPassword !== ""){
                    if(signupPassword == signupRepeatPassword){
                        if(signupPassword != ""){
                            if(signupRepeatPassword != ""){
                            	if(emailCss == 'rgb(80, 255, 80)'){
                            		if(action == '1'){
                            			$("#btn-signup").css('cursor', 'pointer');
                            			$("#btn-signup").parents('form').submit();
                            		}
                            	}                                    
                            }
                        }
                    }                    
                }
            } 
        } 
    } 
       

}


$("#login").click(function(){
	$("#registryTable").css('display', 'none');
	$("#loginTable").css('display', 'block');


});

$("#registry").click(function(){
	$("#loginTable").css('display', 'none');
	$("#registryTable").css('display', 'block');


});


























