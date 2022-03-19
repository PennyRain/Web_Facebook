<?php 
session_start();
    include "db_conn.php";

if (isset($_POST['password']) && isset($_POST['cpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$password = validate($_POST['password']);
	$cpassword = validate($_POST['cpassword']);
    
    if(empty($password)){
      header("Location: change-password.php?error=Yêu cầu nhập mật khẩu mới");
	  exit();
    }else if($password !== $cpassword){
      header("Location: change-password.php?error=Mật khẩu không khớp");
	  exit();
    }else {
    	// hashing the password
    	$password = md5($password);
    	$cpassword = md5($cpassword);
        $id = $_SESSION['id'];

        $sql = "SELECT password FROM users WHERE  id='$id' AND password='$password'";
        $result = mysqli_query($conn, $sql);
      
        	
        	$sql_2 = "UPDATE users SET password='$password' WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change-password.php?success=Thay đổi mật khẩu thành công");
	        exit();

    }

    
}else{
	header("Location: change-password.php");
	exit();
}

