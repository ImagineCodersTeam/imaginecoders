<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "imaginecoders";
try {
    $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message= $_POST['message'];
    date_default_timezone_set("Asia/Calcutta");
    $insertdate = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO customers (name,email,subject,message,datetime)
	 VALUES ('$name','$email','$subject','$message','$insertdate')";
    $conn->exec($sql);
   $msg="Successfully Added!!";
      echo "<script type='text/javascript'>alert('$msg');</script>";
      header('Location:index.html');
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>