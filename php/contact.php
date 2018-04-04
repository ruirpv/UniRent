<?php

if(!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$subject  = $_POST['subject'];
$comments = $_POST['comments'];
$verify   = $_POST['verify'];

if(trim($name) == '') {
	echo '<div class="error_message">Atenção! Você deve digitar seu nome.</div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="error_message">Atenção! Por favor insira um endereço de e-mail válido.</div>';
	exit();
} else if(trim($phone) == '') {
	echo '<div class="error_message">Atenção! Por favor insira um número de telefone válido.</div>';
	exit();
} else if(!is_numeric($phone)) {
	echo '<div class="error_message">Atenção! O número de telefone pode conter apenas dígitos.</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">Atenção! Você digitou um endereço de e-mail inválido. Por favor, tente novamente.</div>';
	exit();
}

if(trim($subject) == '') {
	echo '<div class="error_message">Atenção! Por favor, insira um assunto.</div>';
	exit();
} else if(trim($comments) == '') {
	echo '<div class="error_message">Atenção! Por favor insira a sua mensagem.</div>';
	exit();
} else if(!isset($verify) || trim($verify) == '') {
	echo '<div class="error_message">Atenção! Por favor, insira o número de verificação.</div>';
	exit();
} else if(trim($verify) != '4') {
	echo '<div class="error_message">Atenção! O número de verificação que você digitou está incorreto.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.

//$address = "contact@unirent.online";
$address = "contact@unirent.online";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

$e_subject = 'Você foi contatado por ' . $name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "Você foi contatado por $name em relação a $subject, a mensagem adicional é a seguinte." . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "Você pode entrar em contato com $name via email, $email ou via telefone $phone";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "De: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>E-mail enviado com sucesso.</h1>";
	echo "<p>Obrigado <strong>$name</strong>, sua mensagem foi enviada para nós.</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERRO!';

}