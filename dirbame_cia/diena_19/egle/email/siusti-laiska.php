<?php


print_r($_POST); //pasitikrinimas ar veikia

$klientoVardas = $_POST['vardas'];
$klientoPavarde = $_POST['pavarde'];
$klientoPastas = $_POST['pastas'];
$klientoAntraste = $_POST['antraste'];
$klientoKlausimas = $_POST['klausimas'];


// echo "$klientoVardas <hr /> $klientoPavarde <br />";
// echo "$klientoEmail <br />";
// echo "$klientoAntraste <hr /> $klientoKlausimas";


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
    $mail->Username = 'xtesutonotamex@gmail.com';                 // SMTP username
    $mail->Password = 'paswordukas';                          // SMTP username



    //Recipients
    $mail->setFrom('xtesutonotamex@gmail.com', 'Prezidendas');
    $mail->addAddress('xtesutonotamex@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    $mail->addReplyTo( $klientoPastas, $klientoVardas . $klientoPavarde);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = " <b>Klienatas klausia:</b>   $klientoKlausimas" ;
    $mail->AltBody = " Klieantas klausia: $klientoPastas";

    $mail->send();
    echo '<div class="bg-info"> ZINUTE ISSIUSTA SEKMINGAI     </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> neveikia     </div>' . $mail->ErrorInfo;
}
 ?>
