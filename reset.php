<!-- <!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post" action="reset.php">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Reset Password">
    </form> -->

    <?php
    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     $email = $_POST["email"];

    //     // Generate a unique token (you can use a library like random_bytes)
    //     $token = bin2hex(random_bytes(32));

    //     // Compose the reset link with the token as a query parameter
    //     $resetLink = "http://yourwebsite.com/reset-password.php?token=$token";

    //     // Compose the email
    //     $subject = "Password Reset - Vet Mall";
    //     $message = "Click the link below to reset your password:\n\n";
    //     $message .= $resetLink;


    //     $smtp_server = 'smtp.gmail.com';
    //     $smtp_port = 587; // Use 587 for TLS, 465 for SSL
    //     $smtp_username = 'glass.moubayed@gmail.com';
    //     $smtp_password = 'lolomggt';

    //     // Send the email using the mail() function
    //     $headers = "From: glass.moubayed@gmail.com";
    //     if (mail($email, $subject, $message, $headers)) {
    //         echo "An email with a password reset link has been sent to your email address.";
    //     } else {
    //         echo "Email sending failed. Please try again later.";
    //     }
    // }
    ?>
  <!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post" action="reset.php">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Reset Password">
    </form>
    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$email = $_POST['email'];
$resetLink = "http://yourwebsite.com/reset-password.php?token=" . bin2hex(random_bytes(32));

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'anthony.moubayed1@gmail.com'; // Replace with your Gmail email
$mail->Password = 'lolomggt'; // Replace with your Gmail password or app password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('anthony.moubayed1@gmail.com', 'anthony');
$mail->addAddress($email);

$mail->isHTML(true);
$mail->Subject = 'Password Reset - Vet Mall';
$mail->Body = "Click the link below to reset your password: <a href='$resetLink'>$resetLink</a>";

if ($mail->send()) {
    echo "An email with a password reset link has been sent to your email address.";
} else {
    echo "Email sending failed. Please try again later. Error: " . $mail->ErrorInfo;
}
?>


</body>
</html>
