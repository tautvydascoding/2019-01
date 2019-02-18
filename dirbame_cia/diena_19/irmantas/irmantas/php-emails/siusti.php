<?php


// print_r( $_POST );

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$tema = $_POST['tema'];
$message = $_POST['message'];
$email = $_POST['email'];

// echo "  $klientoVardas  $klientoPavarde  <hr /> ";
// echo "  $klientoAntraste  <hr /> $klientoKlausimas   ";
// echo "  <hr /> $klientoPastas   ";
require_once ("libs/PHPMailer-master/PHPMailerAutoload.php");

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'projektasv2test@gmail.com';                 // SMTP username
    $mail->Password = 'nesakysiu';                          // SMTP username



    //Recipients
    $mail->setFrom('projektasv2test@gmail.com', 'Prezidendas');
    $mail->addAddress('projektasv2test@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    $mail->addReplyTo( $email, $name . $lastname);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $tema;
    $mail->Body    = " <b>Klienatas klausia:</b>   $message" ;
    $mail->AltBody = " Klieantas klausia: $email";

    $mail->send();
    echo '<div class="bg-info"> ZINUTE ISSIUSTA SEKMINGAI     </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> neveikia     </div>' . $mail->ErrorInfo;
}










 ?>
