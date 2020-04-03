<?php

	class emailDao{
	
	function EnviaEmail($dadosEmail)
	{	
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
		include "PHPMailer-master/PHPMailerAutoload.php";
 
		// Inicia a classe PHPMailer
		$mail = new PHPMailer();
 
		// Método de envio
		$mail->IsSMTP(); // Enviar por SMTP 
		$mail->Host = "mail.bluewash.com.br"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
		$mail->Port = 587; 
 
		$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
		$mail->Username = 'tecnico@bluewash.com.br'; // Usuário do servidor SMTP (endereço de email)
		$mail->Password = 'Bw@102030'; // Mesma senha da sua conta de email
 
		// Configurações de compatibilidade para autenticação em TLS
		$mail->SMTPOptions = array(
 			'ssl' => array(
 			'verify_peer' => false,
 			'verify_peer_name' => false,
 			'allow_self_signed' => true
 			)
		);
		// $mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
		// Define o remetente
		$mail->From = "tecnico@bluewash.com.br"; // Seu e-mail
		$mail->FromName = "Recuperar Senha TecPlus"; // Seu nome
 
		// Define o(s) destinatário(s)
		$mail->AddAddress('inserir o email', 'Guilherme');
 
		// Definir se o e-mail é em formato HTML ou texto plano
		$mail->IsHTML(true); // Formato HTML . Use "false" para enviar em formato texto simples.
 
		$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
		// Assunto da mensagem
		$mail->Subject = "Alteração de login / senha: " . $nome; 
 
		// Corpo do email
		$mail->Body = 'Nome: ' . $nome . '<br>Departamento: ' . $departamento . '<br>Assunto: ' . $assunto;

		// Envia o e-mail
		$enviado = $mail->Send();
 
 
		// Exibe uma mensagem de resultado
		if ($enviado) {
     			echo "Seu email foi enviado com sucesso!";
		} else {
     			echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
		}
	}
	
	}
?>