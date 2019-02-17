<?php
// uzduotis isvesti duomenis:

// print_r ( $_POST );  //ispausdina post, cia pasitikrinam, kokius duomenis turim ir uzkomentuojam
// echo "<hr />";

$klientoVardas = $_POST['klientoVardas']; //imam is index failo name='vardas'
$klientoAntraste = $_POST['klientoTema']; //imam is index failo name='antraste'
$klientoKlausimas = $_POST['klientoKlausimas']; //imam is index failo name='klausimas'
$klientoPastas = $_POST['klientoPastas']; //imam is index failo name='pastas'

// pasitikrinam ar spausdina ir uzkomentuojam:
// echo "$klientoVardas $klientoPavarde <hr />";
// echo "$klientoAntraste <hr /> $klientoKlausimas <hr />";
// echo "$klientoPastas";

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
  $mail->Username = 'jzcodingsc@gmail.com';                 // SMTP username
  $mail->Password = 'kaunascoding';                           // SMTP password


    //Recipients
    $mail->setFrom('jzcodingsc@gmail.com', 'Puslapiu kurejai');
    $mail->addAddress('jzcodingsc@gmail.com', 'Kazkoks klientas');     // Add a recipient
    // $mail->addAddress('aaa@gmail.com', 'Joe ');     // Add a recipient
    $mail->addReplyTo($klientoPastas, '$klientoVardas' );
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = " <b>Klientas klausia:</b> $klientoKlausimas";
    $mail->AltBody = "Klientas klausia: $klientoKlausimas" ;

    $mail->send();

    require_once('model/db_klientu_klausimai.php');
    createDoctor($klientoVardas, $klientoPastas, $klientoAntraste, $klientoKlausimas);



    echo '<div class="bg-info">ZINUTE ISSIUSTA SEKMINGAI    </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> ZINUTES ISSIUST NEPAVYKO  </div>'. $mail->ErrorInfo;
}
header('Location: susisiekite.php');
 ?>
