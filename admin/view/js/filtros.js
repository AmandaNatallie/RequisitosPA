function openAjax(){
	var ajax;

try{
	ajax = new XMLHttpRequest();
}catch(erro){
	try{
		ajax = new ActiveXObject("Msxl2.XMLHTTP");
	}catch(ee){
		try{
			ajax = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			ajax = false;
		}
	}
}
return ajax;
}//instancia dinamicamente o objecto xmlhttp

function busca_cidade(){

	if(document.getElementById){
            
                document.getElementById('carregando').style.display = 'block';
		var estado = document.getElementById('estado').value;
		var exibeResultado = document.getElementById('exibe');
		
		if(estado !== ""){

			var ajax = openAjax();
					
			ajax.open("GET", "http://desenvolvimento.criativin.com.br/buscafarma/templates/admin/filtros.php?estado=" + estado, true);
			
			ajax.onreadystatechange = function(){
				if(ajax.readyState == 1){
					exibeResultado.innerHTML = '<p>Carregando resultados...</p>';
					
				}
				
				if(ajax.readyState == 4){
					if(ajax.status == 200){
						var resultado = ajax.responseText;
						resultado = resultado.replace(/\+/g, " ");				
						resultado = unescape(resultado);
						exibeResultado.innerHTML = resultado;
                                                document.getElementById('carregando').style.display = 'none';
											
												
						
					}else{
						exibeResultado.innerHTML = '<p>Ouve algum erro na requisição</p>';
                                                document.getElementById('carregando').style.display = 'none';
						
					}
				}
			}
			ajax.send(null);
		}
	}
}
