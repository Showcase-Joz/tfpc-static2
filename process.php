<?php
     if(isset($_POST['message']) == false) {     //  If there's no message
        echo "Uh oh. Looks like you didn't actually include a message, friend.<br><br>";
        die();   
    }
    
    
    $destination = "joz@showcaseimagery.com";       //  Put your email address here
    $emailbcc = "webmaster@showcaseimagery.com"; // testing bcc address
    $subject = "Message from the funeral planning website!";   //  Fill in the subject line you want your messages to have
    $fromAddress = "advisors@thefuneralplanningcompany.co.uk";   //  Fill in the email address that you want the messages to appear to be from
                                                                    //  Use a real address to reduce the odds of getting spam-filtered.
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = str_replace("\n.", "\n..", $_POST['message']);   //  Prevents a new line starting with a period from being omitted

    $message = "Name: ". $fname . " ". $lname ."\nEmail: ". $email . "\nPhone: ". $phone . "\nMessage: ".$message."\n";

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: " . $fromAddress;
$headers[] = "Subject: " . $subject;
$headers[] = "X-Mailer: PHP/".phpversion();
$headers[] = "Bcc: " . $emailbcc;


mail($destination, $subject, $message, implode("\r\n", $headers));
 
header("Location: thanks.html");

?>