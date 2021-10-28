<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/forgot_password.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>Forgot Password</title>

</head>
<body>

<?php

$to_email = "ianmatias187@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: soldierian57@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>
<div class="row justify-content-center container">

    <form action="send_link.php" method="POST">

        <div class="form-group">
        <label>Email Address</label>
        <input type="text" name="eaddress" class="form-control" value="">
        </div>

        <div class="form-group">  
        <button type="submit" class="btn btn-primary" name="send">SEND</button>
        </div>
        
    </form>
    </div>


</body>
</html>