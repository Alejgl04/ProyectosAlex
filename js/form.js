$(document).ready(function (){
	var res = true;
	
	$('body').on('click', '#env_form', function(){
		var elem = $(this);
		var valid = true;
		var txt = '';
		var prin = elem.parents('#form_cotac');
		nombre = prin.find('#form_name')[0].value;
		tlf = prin.find('#form_phone')[0].value;
		email = prin.find('#form_email')[0].value;
		mode = prin.find('#form_mdint')[0].value;

		if(res){
			res = false;
			$('#env_form').attr('disabled',true);
			if(nombre==''){
				valid = false;
				txt = 'Nombre no puede estar vacio.';
			}

			if(tlf==''){
				valid = false;
				if(txt!=''){
					txt = txt + '<br>Numero Telefonico no puede estar vacio.';
				}else{
					txt = 'Numero Telefonico no puede estar vacio.';
				}
				
			}

			if(email==''){
				valid = false;
				if(txt!=''){
					txt = txt + '<br>Correo no puede estar vacio.';
				}else{
					txt = 'Correo no puede estar vacio.';
				}
			}else{
				var re = /^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})*$/i;
				if(!re.test(email)){
					valid = false;
					if(txt!=''){
						txt = txt + '<br>Correo Invalido.';
					}else{
						txt = 'Correo Invalido.';
					}			
				}
			}

			if(mode==0){
				valid = false;
				if(txt!=''){
					txt = txt + '<br>Debe seleccionar un modelo de interes.';
				}else{
					txt = 'Debe seleccionar un modelo de interes.';
				}
			}


			if(valid){
				$.post('contacto.php', {nombre:nombre, tlf:tlf, email:email, mode:mode}, function(json){
					if(json.success){
						$('#erro_form').html(json.msj);
						$('#erro_form').attr('style','color: #1ee63c;');
						document.getElementById("form_name").value = "";
						document.getElementById("form_phone").value = "";
						document.getElementById("form_email").value = "";
						document.getElementById("form_mdint").value = "0";
						setTimeout(function (){
							$('#erro_form').html('');
							$('#erro_form').attr('style','display: none;');
							res = true;
							$('#env_form').attr('disabled',false);
						},5000);
					}else{
						$('#erro_form').html(json.msj);
						$('#erro_form').attr('style','');
						setTimeout(function (){
							$('#erro_form').html('');
							$('#erro_form').attr('style','display: none;');
							res = true;
							$('#env_form').attr('disabled',false);
						},5000);
					}
				});
			}else{
				$('#erro_form').html(txt);
				$('#erro_form').attr('style','');
				setTimeout(function (){
					$('#erro_form').html('');
					$('#erro_form').attr('style','display: none;');
					res = true;
					$('#env_form').attr('disabled',false);
				},5000);
			}
		}
	});
});