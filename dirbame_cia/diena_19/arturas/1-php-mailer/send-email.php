<?php
  // print_r($_POST);
  require_once('libs\PHPMailer-master\PHPMailerAutoload.php');
  $klientoVardas = $_POST['name'];
  $klientoPavarde = $_POST['lname'];
  $klientoAntraste = $_POST['subject'];
  $klientoKlausimas = $_POST['question'];
  $klientoEmail = $_POST['email'];

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
    //Server settings
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
    $mail->Username = 'tomastomsonas1234@gmail.com';                 // SMTP username
    $mail->Password = 'Romas123';                 // SMTP username

    //Recipients
    $mail->setFrom('tomastomsonas1234@gmail.com', 'Maileras');
    $mail->addAddress('tomastomsonas1234@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo($klientoEmail, $klientoVardas . $klientoPavarde);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = "$klientoEmail. $klientoVardas . $klientoPavarde <b>Kliento klausimas:</b> $klientoKlausimas";
    $mail->AltBody = "Kliento klausimas:</b> $klientoKlausimas";

    $mail->send();
    echo '<div class="bg-info">Emailas has been sent</div>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
 ?>
