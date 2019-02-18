<?php
// print_r($_POST);

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
echo " <h3> Thank you for registering to $comment </h3>";
// getEvents($name, $surname, $email, $phone, $comment);

require_once ("libs/PHPMailer-master/PHPMailerAutoload.php");

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
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
  $mail->SMTPDebug = 0;                                 // / ar nori matyti klaidas kaip programuotojas, bet vartotojas neturi to matyt. Pries kiekviena echo rasyt if
  $mail->isSMTP();                                      // Set mailer to use SMTP

  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'xtesutonotamex@gmail.com';                 // SMTP username
  $mail->Password = 'paswordukas';                           // SMTP password


    //Recipients
    $mail->setFrom('xtesutonotamex@gmail.com', 'Puslapiu kurejai');
    $mail->addAddress('xtesutonotamex@gmail.com', 'Klientas');     // Add a recipient
    // $mail->addAddress('aaa@gmail.com', 'Joe ');     // Add a recipient
    //$mail->addReplyTo($klientoPastas, '$klientoVardas' );
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = " Registration Confirmation";
    $mail->Body    = " <b>Thank you for registering to: $comment  <br /> <b>See you soon!</b>";
    $mail->AltBody = "Registration confirmed to:  $comment" ;

    $mail->send();

    require_once('events-functions.php');
    createVisitor($name, $surname, $email, $phone, $comment);



    echo '<div class="bg-secondary"> Thank you for registering! </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> Registration was not successful, please try again </div>'. $mail->ErrorInfo;
}

header('Location: events.php');








 ?>
