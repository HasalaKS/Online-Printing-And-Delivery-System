<?php

session_start();

if(isset($_POST['signupbtn'])){
	include 'dbh.inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	if(empty($uid)||empty($pwd)){
		header("Location: ../index.php?login=empty");
		exit();
	}
	else{
		$sql = "SELECT * FROM customer WHERE User_name='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck < 1){
			header("Location: ../index.php?login=error2");
			exit();
		}
		else{
			if($row = mysqli_fetch_assoc($result)){
				$hashedPwdCheck = password_verify($pwd, $row['Password']);
				if($hashedPwdCheck == FALSE){
					header("Location: ../index.php?login=error3");
					exit();
				}
				elseif($hashedPwdCheck == TRUE){
					$_SESSION['user_id'] = $row['Customer_ID'];
					$_SESSION['user_first'] = $row['Fname'];
					$_SESSION['user_last'] = $row['Lname'];
					$_SESSION['user_email'] = $row['Email'];
					$_SESSION['user_phone'] = $row['Contact_no'];
					$_SESSION['user_add'] = $row['Address'];
					$_SESSION['user_city'] = $row['City'];
					$_SESSION['user_uid'] = $row['User_name'];
					$_SESSION['user_pwd'] = $row['Password'];
					header("Location: ../index.php?login=Success");
					exit();
				}
			}
		}
	}	
}
else{
	header("Location: ../index.php?login=error1");
	exit();
}