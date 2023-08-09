<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Data received file</title>
</head>

<body>
	<?php
	     $yourName = $_POST['yname'];
	     $fatherName = $_POST['fname'];
         $schoolName = $_POST['sname'];
         $mobileNumber = $_POST['mnumber'];
         $gender = $_POST['gender'];
         
         //create database in phpmyadmin new dbasename create then create table reqcolumn//
         
        $conn = new  mysqli('localhost', 'root', '', 'test');
			if($conn->connect_error){
			die("Connection Failed : .$conn->connect_error);
			}else{
			$stmt $conn->prepare("insert into registration (yourName, fatherName,schoolName,mobileNumber, gender)
			values(?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssi",$firstName, $lastName, $gender, $email, $password, $number);
			$stmt->execute();
			echo "registration Successfully...";
			$stmt->close();
			$conn->close();
         
         
         
         
         
         
         
         
             //echo " Your Name = $yourName <br/>
             	 Fathers Name = $fatherName <br/>
           		 School Name = $schoolName <br/>
            	 Mobile number = $mobileNumber <br/>
            	 gender = $gender <br/>
                ";//
     ?>

</body>

</html>
