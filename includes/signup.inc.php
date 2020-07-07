<?php

if(isset($_POST['btnSubmit'])){
	
	include_once 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['firstname']);
	$last = mysqli_real_escape_string($conn, $_POST['secondname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['contactnumber']);
	$add = mysqli_real_escape_string($conn, $_POST['addressline']);
	$c_city = mysqli_real_escape_string($conn, $_POST['city']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	if(empty($first)||empty($last)||empty($email)||empty($phone)||empty($add)||empty($c_city)||empty(c_name)||empty($pwd)){
		header("Location: ../register.php?=signup=empty");
		exit();
	}
	else{
		if(!preg_match("/^[a-zA-Z]*$/", $first) ||!preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../register.php?=signup=Invalid");
			exit();
		}
		else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../register.php?=signup=email");
				exit();
			}
			else{
				 $sql = "SELECT * FROM customer WHERE User_name='$uid'";
				 $result = mysqli_query($conn, $sql);
				 $resultCheck = mysqli_num_rows($result);
				 
				 if($resultCheck > 0){
					header("Location: ../register.php?=signup=userTaken");
					exit();
				 }
				 else{
					 $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					 $sql ="INSERT INTO customer(Fname,Lname,Email,Contact_no,Address,City,User_name,Password) VALUES ('$first','$last','$email','$phone','$add','$c_city','$uid','$hashedPwd');";
					 
					 mysqli_query($conn, $sql);
					 header("Location: ../register.php?=signup=Success");
					 exit();
				 }
			}
		}
	}
}
else{
	header("Location: ../register.php.php");
	exit();
}