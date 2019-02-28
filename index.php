<!DOCTYPE html>
<html>
<head>
	<title>Peugeot Panamá</title>
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<div style="background: #132031;color: #FFFFFF;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 cinti"><img src="img/logoPeugeot_V_typoB_M.png" class="img_logo"></div>
				<div class="col-xs-12 col-sm-12 col-md-6 cinti cint_end">
					<a href="https://www.facebook.com/PeugeotPA/" title="Facebook" target="_blank">
						<i class="fa fa-facebook redes_cinti"></i>
					</a>
	          		<a href="https://www.instagram.com/peugeotpty/" title="Instragram" target="_blank">
	          			<i class="fa fa-instagram"></i>
	          		</a>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div>
			<img src="img/1-Slider.jpg" class="full_width">
		</div>
	</div>

	<div class="container cont_form">
		<form id="form_cotac" class="full_width">
			<div class="row pri_div" style="">
				<div class="div_form">
					<i id="icon_input_uno" class="fa fa-user"></i>	
				    <input type="text" class="form-control sin_bor" id="form_name" placeholder="NOMBRE" required >
			  	</div>
				<div class="div_form">
					<i class="fa fa-phone" id="icon_input_dos" aria-hidden="true"></i>	
				    <input type="text" class="form-control sin_bor" id="form_phone" placeholder="TELÉFONO" required>
			  	</div>
				<div class="div_form">
					<i class="fa fa-envelope-o email_icon" id="icon_input_tres"></i>
				    <input type="email" class="form-control sin_bor" id="form_email" placeholder="CORREO" required>
			  	</div>
				<div id="borrar_back" class="div_form">
			      	<select id="form_mdint" class="form-control sin_bor" style="width: 100% !important;margin-left: 0%;">
				        <option value="0" selected="">MODELO DE INTERES</option>
				        <option value="208">208</option>
				        <option value="301">301</option>
				        <option value="308">308</option>
				        <option value="SUV 2008">SUV 2008</option>
				        <option value="SUV 3008">SUV 3008</option>
				        <option value="SUV 5008">SUV 5008</option>
			      	</select>
			    </div>
				<div class="btn_div">
					<button id="env_form" type="button" class="btn btn-primary btn_sub">ENVIAR</button>
				</div>
			</div>
		</form>
		<span id="erro_form" class="error_form" style="display: none;"></span>
	</div>

	<div class="container" style="margin-top: 5%;margin-bottom: 2%;">
		<div class="mySlides">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="img/Car1.jpg" class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa/gamas/nuestros-autos/301-sedan.html" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT SUV <span style="color: #007bff;">301</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ocul_resp">
					<img src="img/Car2.jpg"  class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT <span style="color: #007bff;">5008</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ocul_resp">
					<img src="img/Car3.jpg" class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa/gamas/nuestros-autos/suv-2008.html" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT SUV <span style="color: #007bff;">2008</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="mySlides">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="img/Car2.jpg"  class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT <span style="color: #007bff;">5008</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ocul_resp">
					<img src="img/Car3.jpg" class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa/gamas/nuestros-autos/suv-2008.html" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT SUV <span style="color: #007bff;">2008</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ocul_resp">
					<img src="img/Car1.jpg" class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa/gamas/nuestros-autos/301-sedan.html" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT SUV <span style="color: #007bff;">301</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="mySlides">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="img/Car3.jpg" class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa/gamas/nuestros-autos/suv-2008.html" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT SUV <span style="color: #007bff;">2008</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ocul_resp">
					<img src="img/Car1.jpg" class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa/gamas/nuestros-autos/301-sedan.html" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT SUV <span style="color: #007bff;">301</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ocul_resp">
					<img src="img/Car2.jpg"  class="full_width" style="margin-bottom: 2%;">
					<a href="https://www.peugeot.com.pa" target="_blank">
						<div style="padding: 2%;background: #132031;color: #FFFFFF;font-weight: bold;display: inline-block;width: 100%;">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="display: inline-block;font-size: 80%;">
								PEUGEOT <span style="color: #007bff;">5008</span>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="display: inline-block;font-size: 80%;">
								<button type="submit" class="btn btn-primary" style="font-weight: bold;font-size: 85%;border-radius: 0%;">DESCÚBRELA</button>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<br>

	<div style="text-align:center; margin-bottom: 5%;">
		<a class="prev" onclick="plusSlides(-1)" style="color: #bbb;">&#10094;</a>
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
		<span class="dot" onclick="currentSlide(3)"></span> 
		<a class="next" onclick="plusSlides(1)" style="color: #bbb;">&#10095;</a>
	</div>

	<div id="banner_md">
      	<img src="img/logo-1.png" alt="" class="img-responsive">
      	<p id="parraf_pcumple">
      		Peugeot Cumple, es el respaldo que Peugeot Panamá le ofrece a sus clientes en el servicio post venta, donde tenemos como
      		<br/> bandera la atención y el profesionalismo con el que tratamos a su vehículo, ofreciéndole un servicio 100% garantizado.
      	</p> 
 	</div>
 	<div class="container text-center" style="margin-top:5%;">
    	<div id="Primer_fila" class="row">
      		<div class="col-md-4">
        		<img src="img/Icon---!-Png.png" alt="">
        		<p>Mantenimiento en menos de<br/> 60 minutos o tu servicio es gratís.</p>
      		</div>
      		<div class="col-md-4">
       			<img src="img/Icon---2-Png.png" alt="">
        		<p>Respetamos el presupuesto<br/>estipulado o asumimos la diferencía.</p>
      		</div>
      		<div class="col-md-4">
        		<img src="img/Icon---3-Png.png" alt="">
        		<p>Control de calidad 100%.</p>
      		</div>
    	</div> 
    	<div id="Segund_fila" class="row"  style="margin-top:5%;">
      		<div class="col-md-4" >
        		<img src="img/Icon---4-Png.png" alt="">
        		<p>Pedido de respuestos en 10 días<br/>hábiles o pagas solo la mitad.</p>
      		</div>
      		<div class="col-md-4">
        		<img src="img/Icon---5-Png.png" alt="">
        		<p>Transparencía de precios<br/>en nuestros servicios.</p>
      		</div>
      		<div class="col-md-4">
        		<img src="img/Icon---6-Png.png" alt="">
        		<p>Entrega puntual de tu auto<br>o la mano de obra va por nosotros.</p>
      		</div>
    	</div>
		<div id="Tercera_fila" class="row" style="margin-top:5%;margin-bottom: 5%;">
      		<div class="col-md-4">
        		<img src="img/Icon---7-Png.png" alt="">
        		<p>Entregamos los respuestos<br>sustituidos de tu vehículo.</p>
      		</div>
    	</div>
  	</div>
  	<footer  style="background-color: #132031;padding-top: 5%;">
	  	<div class="container" style="background-color: #132031;">
		    <div class="row" style="">
		      	<div class="col-md-3">
		      		<p id="foot_subtitulo"><span style="color: #0069d9">COSTA</span> DEL ESTE</p>
		      		<p id="foot_txt">+507 209-8764 / 65</p>
		      	</div>
		      	<div class="col-md-3">
		      		<p id="foot_subtitulo">VILLA LUCRE</p>
		      		<p id="foot_txt">+507 387-4326 / 27</p>
		      	</div>
	      		<div class="col-md-3">
		      		<p id="foot_subtitulo">VIA BRASIL</p>
		      		<p id="foot_txt">+507 386-9656 / 386-2458</p>
		      	</div>
	      		<div class="col-md-3">
	        		<p id="foot_subtitulo">REDES SOCIALES</p>
		        	<div id="img_redes">
		          		<a href="https://www.facebook.com/PeugeotPA/" title="Facebook" target="_blank"><i class="dottt fa fa-facebook"></i></a>
		          		<a href="https://www.instagram.com/peugeotpty/" title="Instragram" target="_blank"><i class="dott fa fa-instagram"></i></a>
		        	</div>
		      	</div>
		    </div>
		    <div id="filaNumDos" class="row">
		        <div class="col-md-6">
		          	<p id="foot_parr">&copy;2019. <span style="color: #0069d9">Motor Emotion S.A</span> | Derechos Reservados.</p>
		        </div>
		    </div>
	  	</div>  
	</footer> 
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
		}
	</script>

</body>
</html>