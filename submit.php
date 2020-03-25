<?php

	$name=$_POST["username"];
	$school=$_POST["school"];
	$gender=$_POST["gender"];

	echo "您的姓名:".$name."<br/>";
	echo "您的學校:".$school."<br/>";
	echo "您的性別:".$gender."<br/>";

	$live=$_POST["live"];
	$iivenumber=count($live);
	echo $livenumber;
	for($i=0;$i<$livenumber;$i++)
	{
		echo "您的居住地:".$live[$i]."<br/>";
	}

	$email=$_POST["email"];
	$phone=$_POST["phone"];

	echo "您的郵件信箱:".$email."<br/>";
	echo "您的連絡電話:".$phone."<br/>";

	$comment=$_POST["comment"];
	echo nl2br(htmlspecialchars($comment));


 ?>