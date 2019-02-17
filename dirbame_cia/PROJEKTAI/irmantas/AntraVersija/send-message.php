<?php


// print_r( $_POST );

$nameMessage = $_POST['nameMessage'];
$emailMessage = $_POST['emailMessage'];
$telMessage = $_POST['telMessage'];
$messageMessage = $_POST['messageMessage'];
require_once("db-funkcijos.php");
//print_r($messageMessage);
insertMessage($nameMessage, $emailMessage, $telMessage, $messageMessage);


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
    $mail->addReplyTo($emailMessage);     // Add a recipient
    $mail->setFrom($emailMessage, "Naujas laiskas");
    $mail->addAddress("projektasv2test@gmail.com");

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Naujas laiskas";
    $mail->Body    = " <b>Kliento vardas: </b> $nameMessage ;<br /> <b>Klienato el.pastas: </b> $emailMessage ;<br /> <b>Klienato telefono nr.: </b> $telMessage ;<br /><b>Klienato zinute:</b><br>   $messageMessage ;" ;
    $mail->AltBody = " Kliento zinute: $messageMessage";

    $mail->send();
    echo '<div class="bg-info"> ZINUTE ISSIUSTA SEKMINGAI     </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> neveikia     </div>' . $mail->ErrorInfo;
}
// header('Location: contacts.php');
