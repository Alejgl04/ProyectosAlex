<?php
	function veri_email($email){
		$mail_correcto = 0;
	    if((strlen($email)>=6) && (substr_count($email,"@")==1) && (substr($email,0,1)!="@") && (substr($email,strlen($email)-1,1)!="@")){
			if((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))){
				if(substr_count($email,".")>=1){
					$term_dom = substr(strrchr($email, '.'),1);
					if(strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@"))){
						$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
						$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
						if ($caracter_ult != "@" && $caracter_ult != "."){
							$mail_correcto = 1;
						}
					}
				}
			}
		}
		if($mail_correcto){
			return 1;
		}else{
			return 0;
		}
	}

	use PHPMailer\PHPMailer\PHPMailer;

	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$toemails = array();

	$toemails[] = array(
					'email' => 'servicioalcliente@peugeot.com.pa',
					'name' => 'Servicio Al Cliente'
				);

	$mail = new PHPMailer();

	$json_d = array();
	$json_d['success'] = True;
	$json_d['msj'] = '';
	$valid = true;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
		$nombre = $_POST['nombre'];
		$tlf = $_POST['tlf'];
		$email = $_POST['email'];
		$mode = $_POST['mode'];

		if($nombre==''){
			$valid = false;
			$json_d['msj'] = 'Nombre no puede estar vacio.';
		}

		if($tlf==''){
			$valid = false;
			if($json_d['msj']==''){
				$json_d['msj'] = 'Numero Telefonico no puede estar vacio.';
			}else{
				$json_d['msj'] = $json_d['msj'].'<br>Numero Telefonico no puede estar vacio.';
			}
		}

		if($email==''){
			$valid = false;
			if($json_d['msj']==''){
				$json_d['msj'] = 'Correo no puede estar vacio.';
			}else{
				$json_d['msj'] = $json_d['msj'].'<br>Correo no puede estar vacio.';
			}
		}else{
			if(veri_email($email)!=1){
				$valid = false;
				if($json_d['msj']==''){
					$json_d['msj'] = 'Correo Invalido.';
				}else{
					$json_d['msj'] = $json_d['msj'].'<br>Correo Invalido.';
				}
			}
		}

		if($mode=='0'){
			$valid = false;
			if($json_d['msj']==''){
				$json_d['msj'] = 'Debe seleccionar un modelo de interes.';
			}else{
				$json_d['msj'] = $json_d['msj'].'<br>Debe seleccionar un modelo de interes.';
			}
		}

		if($valid){
			$mensaje = "Mi nombre es: ".$nombre.", mi dirección de correo electronico es: ".$email.", mi numero telefonico es: ".$tlf." y estoy interesado en el modelo: ".$mode;

			$subject = 'Nuevo mensaje del formulario de contacto';
			$mail->SetFrom( $email , $nombre );
			$mail->AddReplyTo( $email , $nombre );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;
			$nombre = isset($nombre) ? "<strong>Mi nombre es: </strong> $nombre<br>" : '';
			$email = isset($email) ? "<strong>Mi dirección de correo electronico es: </strong> $email<br>" : '';
			$tlf = isset($tlf) ? "<strong>Mi numero telefonico es: </strong> $tlf<br>" : '';
			$mode = isset($mode) ? "<strong>Estoy interesado en el modelo: </strong> $mode<br>" : '';
			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Este formulario fue enviado desde: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$nombre $email $tlf $mode  $referrer";

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();
			if($sendEmail == true ):
				$json_d['success'] = True;		
				$json_d['msj'] = 'Se ha enviado con exito el correo electrónico';
			else:
				$json_d['success'] = False;		
				$json_d['msj'] = 'El correo electrónico no se pudo enviar debido a un error inesperado. Por favor, inténtelo de nuevo más tarde';
			endif;
		}else{
			$json_d['success'] = False;
		}
	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($json_d);
	exit();
?>