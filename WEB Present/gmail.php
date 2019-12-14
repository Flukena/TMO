<?php
date_default_timezone_set('Asia/Bangkok');
require 'phpmailer/PHPMailerAutoload.php';
header('Content-Type: text/html; charset=utf-8');

function email($major,$commend){

	include("connection.php");
	$strSQL11 = "SELECT * FROM `student_id`";
	$objQuery11 = mysqli_query($con,$strSQL11);
	while ($objResult11 = mysqli_fetch_array($objQuery11)){

	$mail = new PHPMailer;
	$mail->CharSet = "utf-8";
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;


	$gmail_username = "tmo.psit@gmail.com";
	$gmail_password = "tmo12345";



	$sender = "TMO Alert"
	$email_sender = "noreply@ibsone.com"; //

	//if(isset($_POST["sendemail"])){
	$email_receiver = $objResult11["email"]; //
	//}

	$subject = $major; // หัวข้อเมล์


	$mail->Username = $gmail_username;
	$mail->Password = $gmail_password;
	$mail->setFrom($email_sender, $sender);
	$mail->addAddress($email_receiver);
	$mail->Subject = $subject;

	$email_content = "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8'/>
			<title>เตรียมเข้าเรียน</title>
		</head>
	
		<body>
			<center><h1> ถึงเวลาเตรียมตัวเข้าเรียนเเล้ว </h>
			<p>วิชา $commend กรุณาเข้าเรียนให้ตรงเวลา เเละเเจ้งเช็คชื่อกับอาจารย์ผู้สอน</p>
			<img style='width: 30%; height: 30%;' src='https://www.it.kmitl.ac.th/wp-content/themes/itkmitl2017wp/img/life/life-13.jpg'></h1></center>
			
		</body>
	</html>
	"

	$keep = 0;
	if($email_receiver){
		$mail->msgHTML($email_content);
		if (!$mail->send()) {  // สั่งให้ส่ง email

			// กรณีส่ง email ไม่สำเร็จ
			echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
			echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
		}else{
			$keep ++;
			echo"<script language=\"JavaScript\">";
			echo"alert('test')";
			echo"</script>";
		}	
	}
}
}

?>