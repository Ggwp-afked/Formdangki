<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_repeat = $_POST['password_repeat'];

	//kết nối với db
	$conn=new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Ko kết nối đc : '.$conn->connect_error);
	} else{
		$stmt=$conn->prepare("insert into registration(username, password, password_repeat) values(?, ?, ?)");
		$stmt->bind_param("sss",$username, $password, $password_repeat);
		$exceval=$stmt->execute();
		echo $exceval;
		echo "Đăng kí thành công...";
		$stmt->close();
		$conn->close();
	}
?>