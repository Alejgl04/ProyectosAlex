<?php
	if(!isset($_SESSION)){ 
        session_start(); 
    }

	include './../../idioma/idioma.php';

	use PHPMailer\PHPMailer\PHPMailer;

	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$toemails = array();

	$toemails[] = array(
					'email' => 'info@prepanama.com',
					'name' => 'Prepanama'
				);

	$message_success = $tra_suscri;
	$recaptcha_secret = '';
	$mail = new PHPMailer();
	$json_d = array();
	$json_d['success'] = True;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST['suscri'] != ''){
			$email = $_POST['suscri'];
			$subject = 'Nueva Suscripcion';
			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;

			$email = isset($email) ? "El correo electrónico: <strong>$email</strong>,quiere suscribirse" : '';
			

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Este formulario fue enviado desde: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$email $referrer";
		}else{
			$json_d['success'] = False;
			$json_d['msj'] = $tra_correo_not_empty;
		}
	}else{
		$json_d['success'] = False;
		$json_d['msj'] = $tra_ocurrio_error;
	}

	if($json_d['success']){
		$mail->MsgHTML( $body );
		$sendEmail = $mail->Send();
		if($sendEmail == true ):
			$json_d['success'] = True;		
			$json_d['msj'] = $message_success;
		else:
			$json_d['success'] = False;		
			$json_d['msj'] = $tra_error_email;
		endif;
	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($json_d);
	exit();

?>