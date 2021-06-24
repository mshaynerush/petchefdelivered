<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$to = "chef@petchefdelivered.com"

$message = "Name: " . $name . '\n\n' . "Email: " . $email . '\n\n' . "Message: " . '\n' . $msg; 

mail($to, "New Inquiry From Pet Chef Website", $message,)

?>