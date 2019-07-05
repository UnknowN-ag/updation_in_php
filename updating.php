<?php 

	$conn = mysqli_connect('localhost','root','','training');

	$id = $_POST['id'];
	echo $id;
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$std = $_POST['std'];
	$rollno = $_POST['rollno'];
	$branch = $_POST['branch'];

	// $query = "UPDATE `student` SET `name`='$name', `DOB`='$dob', `standard`=$std, `roll no.`=$rollno, `branch`='$branch' WHERE id='$id'";
	$sql = " UPDATE `student` SET `name`='$name',`DOB`='$dob',`standard`=$std,`roll no.`=$rollno,`branch`='$branch' WHERE id='$id' ";

	$runn = mysqli_query($conn, $sql);
	if($runn){
		 header('location:index.php');
	}else{
		echo '<script> alert("error"); </script>';
	}

 ?>