<?php
include "./../../../../../../assets/password/algorithm.php";

$connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

$firstName       = (htmlspecialchars(stripslashes($_POST['first_name_name']))) ? htmlspecialchars(stripslashes($_POST['first_name_name'])) : '';
$middleName       = (htmlspecialchars(stripslashes($_POST['middle_name_name'])) ) ? htmlspecialchars(stripslashes($_POST['middle_name_name']))  : '';
$lastName       = (htmlspecialchars(stripslashes($_POST['last_name_name'])) ) ? htmlspecialchars(stripslashes($_POST['last_name_name']))  : '';
// $userImage       = ($_POST['user_image_name']) ? $_POST['user_image_name'] : '';
$jobLevel       = (htmlspecialchars(stripslashes($_POST['job_level_name'])) ) ? htmlspecialchars(stripslashes($_POST['job_level_name']))  : '';
$addressName       = (htmlspecialchars(stripslashes($_POST['address_name_name'])) ) ? htmlspecialchars(stripslashes($_POST['address_name_name']))  : '';
$userPhone       = (htmlspecialchars(stripslashes($_POST['user_phone_name'])) ) ? htmlspecialchars(stripslashes($_POST['user_phone_name']))  : '';
$userEmail       = (htmlspecialchars(stripslashes($_POST['user_email_name'])) ) ? htmlspecialchars(stripslashes($_POST['user_email_name']))  : '';
$userPass       = (htmlspecialchars(stripslashes($_POST['user_password_name'])) ) ? htmlspecialchars(stripslashes($_POST['user_password_name']))  : '';
$userPassword = encrypt_decrypt($userPass, 'encrypt');


$sql = "INSERT INTO users(fname, mname, lname, urole, aname, uphone, uemail, password) VALUES ('$firstName','$middleName','$lastName','$jobLevel','$addressName','$userPhone','$userEmail','$userPassword')";



use PHPMailer\PHPMailer\PHPMailer;
if (mysqli_query($connect, $sql)) {
    $name = "TDS | Admin Panel";  // Name of your website or yours
    $to = $userEmail;  // mail of reciever
    $subject = "Confirm your account";
    $body = "<h1>Confirm your account</h1>
    <p>Hello $firstName, For the first login, use this email address as the username and password.</p>
    <p><emp>Email/Username :- </emp><b>$userEmail</b></p>
    <p><emp>Password :- </emp><b>$userPass</b></p>";
    $from = "estifanosaschale12@gmail.com";  // you mail
    $password = "************";  // your mail password

    // $fname = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $body = $_POST['body'];

    require_once "./../../../../../../assets/email/contact form/PHPMailer/PHPMailer.php"; 
    require_once "./../../../../../../assets/email/contact form/PHPMailer/SMTP.php";
    require_once "./../../../../../../assets/email/contact form/PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = $password;
    $mail->Port = 587; //587
    $mail->SMTPSecure = "tls"; //tls

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($from, $name);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $body;

    if ($mail->send()) {
        echo true;
    } else {
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("response" => $response)));
} else {
    echo mysqli_error($connect);
}
