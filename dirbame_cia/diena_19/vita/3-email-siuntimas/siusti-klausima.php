<?php

//print_r($_POST);
$klientoVardas = $_POST['vardas'];
$klientoPavarde = $_POST['pavarde'];
$klientoAntraste = $_POST['antraste'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];


//echo " $klientoVardas $klientoPavarde <hr> ";
//echo " $klientoAntraste  <hr> $klientoKlausimas  ";
//echo " <hr> $klientoPastas ";
require_once("libs/PHPMailer-master/PHPMailerAutoload.php");


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
  $mail->SMTPOptions = array(
          'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
);

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vita999777999@gmail.com';
    $mail->Password = 'vita9999' ;                     // TCP port to   $mail->Username =  connect to

    //Recipients
    $mail->setFrom('vita999777999@gmail.com', 'kompany');
    $mail->addAddress($klientoPastas, 'klientas');     // Add a recipient
    $mail->addReplyTo($klientoPastas, $klientoVardas . $klientoPavarde);


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoPastas;

    $mail->send();
    echo 'Zinute issiusta sekmingai';
} catch (Exception $e) {
    echo 'Neveikia', $mail->ErrorInfo;


}
 ?>
