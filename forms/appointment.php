<?php

$errorMSG = "";

$name = $_POST["Name"];

$email = $_POST["Email"];

$phone = $_POST["Phone"];

$date = $_POST["Date"];

$doctor = $_POST["Doctor"];

$message = $_POST["Message"];

$EmailTo = "info@healingtherapycenter.com";

$headers = array(
    'From' => 'Healing Therapy Center <info@healingtherapycenter.com>',
    'Reply-To' => 'info@healingtherapycenter.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

$Subject = "New Lead From Healing Therapy Center";


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>