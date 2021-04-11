<?
	include('Mail.php');
	include('Mail/mime.php');

	$text = 'Versao texto do emaail';
	$html = 'Versao HTML do email';
	$crlf = "\n";
	$mime = new Mail_mime($crlf);
	$mime->setTXTBody($text);
	$mime->setHTMLBody($html);
	$body = $mime->get();
	$recipients = array('<destinatário>');
	$headers['To'] = '<destinatário>';
	//$headers['Cc'] = '<cópia>';
	//$headers['Bcc'] = '<cópia oculta>';
	$headers['From'] = '<remetente>';
	$headers['Subject'] = 'Teste de e-mail formulário com autenticação';
	
  $headers = $mime->headers($headers);
	$params['host'] = '<servidor SMTP>';
	$params['port'] = '<porta>';
	$params['auth'] = TRUE;
	$params['username'] = '<usuário>';
	$params['password'] = '<senha>';

	$mail_object =& Mail::factory('smtp', $params);
	$rs = $mail_object->send($recipients, $headers, $body);
	if (PEAR::isError($rs)) {
		echo $rs->getMEssage()."\n";
	}
	else {
    		echo "Sucesso!";
  	}
?>