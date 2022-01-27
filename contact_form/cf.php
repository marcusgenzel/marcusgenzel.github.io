<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['telefon'];

$to = "marcusgenzel@gmx.net";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message."\r\n Telefonnummer = ". $number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: ";
if($email!=NULL){
mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>