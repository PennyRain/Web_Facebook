<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['firts_name']) && isset($_POST['last_name'])
    && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$first_name = validate($_POST['firts_name']);
	$last_name = validate($_POST['last_name']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$gender = validate($_POST['gender']);


	if (empty($first_name)) {
		header("Location: signup.php?error=Yêu cầu nhập Họ");
	    exit();
	}else if(empty($last_name)){
        header("Location: signup.php?error=Yêu cầu nhập Tên");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Yêu cầu nhập Email");
	    exit();
	}

	else if(empty($password)){
        header("Location: signup.php?error=Yêu cầu nhập mật khẩu");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Email đã được sử dụng");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(firts_name,last_name,email,password,gender) VALUES('$first_name', '$last_name', '$email','$password','$gender')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Bạn tạo tài khoản thành công");
	         exit();
           }else {
	           	header("Location: signup.php?error=Có lỗi xảy ra");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}