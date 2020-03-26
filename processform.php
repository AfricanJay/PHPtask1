<?php 

$firstName = $_REQUEST['first_name'];

$lastName = $_REQUEST['last_name'];

$email_ = $_REQUEST['email'];

$department_ = $_REQUEST['department'];

$gender_ = $_REQUEST['gender'];
 
$terms_ = $_REQUEST['terms'];

$message_ = $_REQUEST['message'];

$data = $firstName . " " . $lastName . " " . $email_ . " " . $department_ . " " . $gender_ . " " . $terms_ . " " . $message_;
$filename_prefix = $_REQUEST['first_name'];
$filename_extn   = '.txt';

$filename = $filename_prefix.$filename_extn;

if( file_exists( $filename ) ){
 # EXTREMELY UNLIKELY, unless two forms with the same content and at the same time are submitted
  $filename = $filename_prefix.$filename_extn;
 # IMPROBABLE that this will clash now...
}

if( file_exists( $filename ) ){
 # Handle the Error Condition
}else{
  file_put_contents( $filename , $data );
}

print_r($_POST)



  
?> 

