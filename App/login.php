<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$emai = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($emai)) {
		header("Location: index.php?error=Yêu cầu nhập Email");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Yêu cầu nhập mật khẩu");
	    exit();
	}else{
		// hashing the password
        $password = md5($password);

        
		$sql = "SELECT * FROM users WHERE email='$emai' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $emai && $row['password'] === $password) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['password'] = $row['password'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['last_name'] = $row['last_name'];
            	header("Location: home/home.php");
		        exit();
            }else{
				header("Location: index.php?error=Sai mật khẩu hoặc tài khoản");
		        exit();
			}
		}else{
			header("Location: index.php?error=Sai mật khẩu hoặc tài khoản!");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}