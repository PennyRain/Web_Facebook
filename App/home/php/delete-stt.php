<?php  
session_start();

# If the admin is logged in
if (isset($_SESSION['id']) &&
    isset($_SESSION['email'])) {

	# Database Connection File
	include "../db_conn.php";


    /** 
	  check if the book 
	  id set
	**/
	if (isset($_GET['id_status'])) {
		/** 
		Get data from GET request 
		and store it in var
		**/
		$id = $_GET['id_status'];

		#simple form Validation
		if (empty($id)) {
			$em = "Error Occurred!";
			header("Location: ../home.php?error=$em");
            exit;
		}else {
             # GET book from Database
			 $sql2  = "SELECT * FROM baiviet
			          WHERE id_status=?";
			 $stmt2 = $conn->prepare($sql2);
			 $stmt2->execute([$id]);
			 $the_book = $stmt2->fetch();

			 if($stmt2->rowCount() > 0){
                # DELETE the book from Database
				$sql  = "DELETE FROM baiviet
				         WHERE id_status=?";
				$stmt = $conn->prepare($sql);
				$res  = $stmt->execute([$id]);
                header("Location: ../home.php");
                }else {
                    $em = "Error Occurred!";
                    header("Location: ../home.php?error=$em");
                    exit;
                }
                
		}
	}else {
      header("Location: ../home.php");
      exit;
	}

}else{
  header("Location: ../login.php");
  exit;
}