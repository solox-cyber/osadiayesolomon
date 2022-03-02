 <link rel="shortcut icon" href="assets/O.ico"  type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/virtue.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/topbar.virtual.css">
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

require_once "vendor/autoload.php";             

$mail = new PHPMailer(true);

$mail->isSMTP();
//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.


try {
//Server settings
$mail->SMTPDebug = 0; // Enable verbose debug output
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'mail.osadiayesolomon.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'connect@osadiayesolomon.com'; // SMTP username
$mail->Password = 'Youngforever@12345'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
$mail->Port = 587; // TCP port to connect to

//Recipients
$mail->setFrom($email, 'Smart Business Card');
$mail->addAddress('osadiayesolomon@gmail.com', 'Osadiaye Solomon'); // Add a recipient
$mail->addAddress('osadiayesolomon@gmail.com'); // Name is optional
$mail->addReplyTo($email, $name);
//  $mail->addCC('cc@example.com');
//  $mail->addBCC('bcc@example.com');

// Attachments


// Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = '';

$mail->send();
  //echo 'Message has been sent';
  echo "<div class='vg-page page-about' id='about'>
    <div class='container py-5'>
      <div class='row'>
        <div class='col-lg-4 py-3'>
          <div class='img-place wow fadeInUp'>
            <img src='assets/img/RTP_0455-Edit.jpg' alt=''>
          </div>
        </div>
        <div class='col-lg-6 offset-lg-1 wow fadeInRight'>
          <h1 class='fw-light'> Your Message has been sent!</h1>
        
          <p class='text-muted'>Thank you for contacting Osadiaye Solomon...
         
         
            </p>
          
          <a href='./' style='text-decoration:none;color:#ff0099;'> Return Home</a>
          
        </div>
      </div>
    </div>
";

} catch (Exception $e) {
 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}". "<a href='./' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
 

}