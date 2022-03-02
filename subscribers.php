<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subscribe'])){
$email = $_POST['email'];

?>

<?php
$servername = "localhost";
$username = "osadiaye_solomon";
$password = "Youngforever@12345";
$dbname = "osadiaye_solomon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Subscribers (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<?php
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
$mail->Subject = "Osadiaye Solomon's Newsletter Subscription";
$mail->Body = "<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Osadiaye Solomon</title>
  <style type='text/css'>
    #outlook a {padding:0;}
    body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;} 
    .ExternalClass {width:100%;}
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div, .ExternalClass blockquote {line-height: 100%;}
    .ExternalClass p, .ExternalClass blockquote {margin-bottom: 0; margin: 0;}
    #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
    
    img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} 
    a img {border:none;} 
    .image_fix {display:block;}

    p {margin: 1em 0;}

    h1, h2, h3, h4, h5, h6 {color: black !important;}
    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: black;}
    h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {color: black;}
    h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {color: black;}

    table td {border-collapse: collapse;}
    table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

    a {color: #3498db;}
    p.domain a{color: black;}

    hr {border: 0; background-color: #d8d8d8; margin: 0; margin-bottom: 0; height: 1px;}

    @media (max-device-width: 667px) {
      a[href^='tel'], a[href^='sms'] {
        text-decoration: none;
        color: blue;
        pointer-events: none;
        cursor: default;
      }

      .mobile_link a[href^='tel'], .mobile_link a[href^='sms'] {
        text-decoration: default;
        color: orange !important;
        pointer-events: auto;
        cursor: default;
      }

      h1[class='profile-name'], h1[class='profile-name'] a {
        font-size: 32px !important;
        line-height: 38px !important;
        margin-bottom: 14px !important;
      }

      span[class='issue-date'], span[class='issue-date'] a {
        font-size: 14px !important;
        line-height: 22px !important;
      }

      td[class='description-before'] {
        padding-bottom: 28px !important;
      }
      td[class='description'] {
        padding-bottom: 14px !important;
      }
      td[class='description'] span, span[class='item-text'], span[class='item-text'] span {
        font-size: 16px !important;
        line-height: 24px !important;
      }

      span[class='item-link-title'] {
        font-size: 18px !important;
        line-height: 24px !important;
      }

      span[class='item-header'] {
        font-size: 22px !important;
      }

      span[class='item-link-description'], span[class='item-link-description'] span {
        font-size: 14px !important;
        line-height: 22px !important;
      }

      .link-image {
        width: 84px !important;
        height: 84px !important;
      }

      .link-image img {
        max-width: 100% !important;
        max-height: 100% !important;
      }
    }

    @media (max-width: 500px) {
      .column {
        display: block !important;
        width: 100% !important;
        padding-bottom: 8px !important;
      }
    }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      a[href^='tel'], a[href^='sms'] {
        text-decoration: none;
        color: blue;
        pointer-events: none;
        cursor: default;
      }

      .mobile_link a[href^='tel'], .mobile_link a[href^='sms'] {
        text-decoration: default;
        color: orange !important;
        pointer-events: auto;
        cursor: default;
      }
    }

  </style>
  <!--[if gte mso 9]>
    <style type='text/css'>
      #contentTable {
        width: 600px;
      }
    </style>
  <![endif]-->
</head>
<body style='width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
<table cellpadding='0' cellspacing='0' border='0' id='backgroundTable' style='margin:0; padding:0; width:100% !important; line-height: 100% !important; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;background-color: #F9FAFB;' width='100%'>
  <tbody><tr>
    <td width='10' valign='top'>&nbsp;</td>
    <td valign='top' align='center'>
      <!--[if (gte mso 9)|(IE)]>
      <table width='600' align='center' cellpadding='0' cellspacing='0' border='0' style='background-color: #FFF; border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;'>
        <tr>
          <td>
      <![endif]-->
      <table cellpadding='0' cellspacing='0' border='0' align='center' style='width: 100%; max-width: 600px; background-color: #FFF; border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;' id='contentTable'>
        <tbody><tr>
          <td width='600' valign='top' align='center' style='border-collapse:collapse;'>
            <table align='center' border='0' cellpadding='0' cellspacing='0' style='background: #F9FAFB;' width='100%'>
<tbody><tr>
<td align='center' valign='top'>
<div style='font-family: &quot;lato&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 28px;'>&nbsp;</div>
</td>
</tr>
</tbody></table>
<table align='center' border='0' cellpadding='0' cellspacing='0' style='border: 1px solid #E0E4E8;' width='100%'>
<tbody><tr>
<td align='center' style='padding: 56px 56px 28px 56px;' valign='top'>
<a style='color: #3498DB; text-decoration: none;' href='https://www.getrevue.co/profile/brightonsmith?utm_campaign=Subscription+confirmation&amp;utm_content=profile-image&amp;utm_medium=email&amp;utm_source=confirmation' target='_blank'><img style='width: 96px; height: 96px; border: 0;' alt='Weekly newsletter of Osadiaye Solomon' src='https://osadiayesolomon.com/assets/O.ico'>
</a>
</td>
</tr>
<tr>
<td align='left' style='padding: 0 56px 28px 56px;' valign='top'>
<div style='font-family: &quot;lato&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 28px;font-size: 18px; color: #333; font-weight: bold;'>Thank you for subscribing to <strong>Weekly newsletter of Osadiaye Solomon</strong>!</div>
</td>
</tr>
<tr>
<td align='left' style='padding: 0 56px 28px 56px;' valign='top'>
<div style='font-family: &quot;lato&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 28px;font-size: 18px; color: #333;'>
You will receive updates from me straight to your inbox in realtime. Kindly stay tune. <a target='_blank' href='https://www.getrevue.co/profile/brightonsmith/issues/weekly-newsletter-of-cyan-variable360-studios-issue-1-121395'>here</a>!
</div>
</td>
</tr>
<tr>

</tr>
<tr>

</tr>
</tbody></table>
<table align='center' border='0' cellpadding='0' cellspacing='0' style='background: #F9FAFB;' width='100%'>
<tbody><tr>
<td align='center' style='padding: 28px 56px;' valign='top'>
<div style='font-family: &quot;lato&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 28px;font-size: 16px; line-height: 24px; color: #A7ADB5;'>Make sure you add this email address (connect@osadiayesolomon.com) to your address book. This way you won't miss a single newsletter.</div>
</td>
</tr>
<tr>

</tr>
</tbody></table>

          </td>
        </tr>
      </tbody></table>
      <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
      </table>
      <![endif]-->
    </td>
    <td width='10' valign='top'>&nbsp;</td>
  </tr>
</tbody></table> 




</body>
";
$mail->AltBody = '';

$mail->send();
  echo 'Message has been sent';
  echo "<a href='./' style='text-decoration:none;color:#ff0099;'> Return Home</a>"; 

} catch (Exception $e) {
 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}'. '<a href='./' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
 

}