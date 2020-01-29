$(function(){
	$("#usuario").keyup(function(){
		var user = $(this).val();
	alert('aaa');
		if(user != ''){
			var dados = {
				palavra : user
			}
			$.post('controller/ver_user_existente.php', dados, function(retorna){
				$(".alerta_user").html(retorna);
			});
		}
	});
});