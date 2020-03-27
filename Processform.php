<?php 
$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$email_w = $_REQUEST['email'];
$department_s = $_REQUEST['department'];
$message_w = $_REQUEST['message'];
$gender_s = $_REQUEST['gender'];
$file_name = $_REQUEST['first_name'];
$data_ = "First Name:".$firstName . "; ".  "Last Name:".$lastName . "; ". 
"Email-address:".$email_w . "; ". "Department:".$department_s . "; ". 
"Gender:".$gender_s . "; " . "Message:" .$message_w;
$file_extnt   = '.txt';
$filename = $file_name.$file_extnt;

  file_put_contents( $filename , $data_ );
print_r($_POST)

?>