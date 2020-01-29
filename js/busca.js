$(function(){
	$("#pesquisa").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('controller/busca.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}else{
			var dados = {
				palavra : pesquisa
			}
			$.post('controller/postagens.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").load(retorna);
			});
		}
			
	});
		
});