<?php
    require "./Biblioteca/PHPMailer/Exception.php";
    require "./Biblioteca/PHPMailer/OAuth.php";
    require "./Biblioteca/PHPMailer/PHPMailer.php";
    require "./Biblioteca/PHPMailer/POP3.php";
    require "./Biblioteca/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    class Mensagem {
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atributo){
            return $this->atributo;
        }
        public function __set($atributo, $valor){
            $this->atributo = $valor;
        }
        public function mensagemValida(){
            if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }
            return true;
        }

    }
    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    if ($mensagem->mensagemValida()) {
        echo 'Mensagem não é válida';
        die();
    }
    $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'joaonetoplus@gmail.com';                 // SMTP username
    $mail->Password = 'plus021998';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('joaonetoplus@gmail.com', 'Web Completo');
    $mail->addAddress('joaoinacio206@gmail.com', 'web Completo destinatario');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    /*$mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Oi sou assunto';
    $mail->Body    = 'Oi. Eu sou o conteúdo do <strong>E-mail</strong> ';
    $mail->AltBody = 'Oi. Eu sou o conteúdo do E-mail';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Não foi possível enviar este -email!';
    echo 'Detalhes do erro ' . $mail->ErrorInfo;
}


    
?>